<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\InvoiceMail;
use Illuminate\Support\Facades\Mail;

class InvoiceController extends Controller
{
    // List all invoices
    public function index()
    {
        $invoices = Invoice::orderBy('created_at', 'desc')->get();
        return view('pages.invoices.amt-invoices', compact('invoices'));
    }

    public function create()
    {
        return view('pages.invoices.amt-invoice');
    }

    public function store(Request $request)
    {
        // Use a transaction to ensure both invoice and items save correctly
        return DB::transaction(function () use ($request) {

            // 1. Create the Invoice Header
            $invoice = Invoice::create([
                'invoice_ref' => $request->invoice_ref,
                'client_name' => $request->client_name,
                'client_address' => $request->client_address,
                'passengers' => $request->passengers,
                'travel_date' => $request->travel_date,
                'issued_date' => $request->issued_date,
                'due_date' => $request->due_date,
                'pickup_times' => $request->pickup_times,
                'return_times' => $request->return_times,
                'total_amount' => 0, // Will update this after items
                'discount_amount' => 0,
            ]);

            $grandTotal = 0;

            // 2. Loop through the items (Coach, Food, Drinks)
            // Expecting $request->items to be an array from the form
            foreach ($request->items as $item) {
                $lineAmount = $item['qty'] * $item['rate'];
                $grandTotal += $lineAmount;

                $invoice->items()->create([
                    'description' => $item['description'],
                    'qty' => $item['qty'],
                    'rate' => $item['rate'],
                    'amount' => $lineAmount,
                ]);
            }

            // 3. Update the final total on the invoice
            $invoice->update(['total_amount' => $grandTotal]);

            // Path to your logo (assuming it's in public/images/logo.png)
            $path = public_path('img/amt-coach-logo.png');

            // Check if file exists and convert to base64
            $logoData = "";
            if (file_exists($path)) {
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $logoData = 'data:image/' . $type . ';base64,' . base64_encode($data);
            }

            // 4. Generate and Download PDF
            $pdf = Pdf::loadView('pages.invoices.pdf-template', compact('invoice', 'logoData'))
                ->setPaper('a4', 'portrait');
            return $pdf->download('invoice_' . $invoice->invoice_ref . '.pdf');
        });
    }

    public function show(Request $request)
    {
        // 1. Fetch the invoice with its related items (eager loading)
        // We use findOrFail to return a 404 error if the invoice ID doesn't exist
        $invoice = Invoice::with('items')->findOrFail($request->id);

        // Path to your logo (assuming it's in public/images/logo.png)
        $path = public_path('img/amt-coach-logo.png');

        // Check if file exists and convert to base64
        $logoData = "";
        if (file_exists($path)) {
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $logoData = 'data:image/' . $type . ';base64,' . base64_encode($data);
        }

        // 2. Load the specific PDF template view and pass the invoice data
        $pdf = Pdf::loadView('pages.invoices.pdf-template', compact('invoice', 'logoData'));

        // 3. Set the paper size to A4 (standard for UK invoices)
        $pdf->setPaper('a4', 'portrait');

        // 4. Use stream() instead of download() to open the PDF in the browser tab
        return $pdf->stream('Invoice_' . $invoice->invoice_ref . '.pdf');
        //return $pdf->stream();
    }

    // Show the edit form
    public function edit($id)
    {
        $invoice = Invoice::with('items')->findOrFail($id);
        return view('pages.invoices.amt-invoice', compact('invoice'));
    }

    // Update the invoice (similar logic to store)
    public function update(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);

        $invoice->update($request->only([
            'invoice_ref',
            'client_name',
            'client_address',
            'passengers',
            'travel_date',
            'pickup_times',
            'return_times',
            'issued_date',
            'due_date'
        ]));

        // Sync items: Delete old and re-add new (simplest approach)
        $invoice->items()->delete();
        $grandTotal = 0;
        foreach ($request->items as $item) {
            $lineAmount = $item['qty'] * $item['rate'];
            $grandTotal += $lineAmount;
            $invoice->items()->create([
                'description' => $item['description'],
                'qty' => $item['qty'],
                'rate' => $item['rate'],
                'amount' => $lineAmount
            ]);
        }
        $invoice->update(['total_amount' => $grandTotal]);

        return redirect()->route('invoices.index')->with('success', 'Invoice updated!');
    }

    // Delete the invoice
    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete(); // This also deletes items due to cascade in migration
        return redirect()->route('invoices.index')->with('success', 'Invoice deleted.');
    }

    // Send the invoice via email
    public function sendEmail(Request $request, $id)
    {
        $request->validate([
            'to' => 'required|email',
            'cc' => 'nullable|email',
            'subject' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        $invoice = Invoice::with('items')->findOrFail($id);

        $path = public_path('img/amt-coach-logo.png');
        $logoData = "";
        if (file_exists($path)) {
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $logoData = 'data:image/' . $type . ';base64,' . base64_encode($data);
        }

        $pdf = Pdf::loadView('pages.invoices.pdf-template', compact('invoice', 'logoData'));
        $pdf->setPaper('a4', 'portrait');
        $pdfContent = $pdf->output();

        $mail = Mail::to($request->to);
        if ($request->filled('cc')) {
            $mail->cc($request->cc);
        }

        $mail->send(new InvoiceMail(
            $invoice,
            $pdfContent,
            $request->subject,
            $request->message
        ));

        return redirect()->route('invoices.index')->with('success', 'Invoice email sent successfully!');
    }
}