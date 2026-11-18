<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $invoice;
    public $pdf;
    public $subjectText;
    public $messageText;

    /**
     * Create a new message instance.
     */
    public function __construct($invoice, $pdf, $subjectText = null, $messageText = null)
    {
        $this->invoice = $invoice;
        $this->pdf = $pdf;
        $this->subjectText = $subjectText ?: 'Invoice ' . $invoice->invoice_ref . ' from AMT Coaches';
        $this->messageText = $messageText ?: 'Please find the attached invoice (' . $invoice->invoice_ref . ') for your records.';
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('info@amtcoaches.co.uk', 'AMT Coaches')
            ->subject($this->subjectText)
            ->view('emails.invoice_mail')
            ->with([
                'content' => $this->messageText,
            ])
            ->attachData($this->pdf, 'Invoice_' . $this->invoice->invoice_ref . '.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
