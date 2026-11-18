<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: 'Helvetica', sans-serif; font-size: 11px; color: #333; line-height: 1.4; }
        .header-table, .items-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .text-right { text-align: right; }
        .bold { font-weight: bold; }
        .text-center { text-align: center;}
        
        /* Layout */
        .company-header { margin-bottom: 30px; }
        .invoice-brand { font-size: 18px; color: #000; }
        
        /* Table Styling */
        .items-table th { 
            border-bottom: 2px solid #000; 
            padding: 8px; 
            text-align: left; 
            background-color: #f8f9fa;
        }
        .items-table td { padding: 10px 8px; border-bottom: 1px solid #eee; }
        
        .totals-section { width: 40%; margin-left: 60%; margin-top: 20px; }
        .totals-section td { padding: 5px; }
        .total-row { font-size: 14px; background-color: #eee; }

        @page {
        margin: 50px 25px; /* Creates space for header and footer */
        }

        .puppies-play-regular {
        font-family: "Puppies Play", cursive;
        font-weight: 400;
        font-style: normal;
        }


        footer {
            position: fixed;
            bottom: -60px; /* Adjust based on your margin */
            left: 0px;
            right: 0px;
            height: 150px;
            text-align: left;
        }

        .bank-info { 
            padding: 10px; 
            border: 1px solid #ddd; 
            background-color: #fafafa;
            margin-bottom: 10px;
        }
    </style>
    <script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap" rel="stylesheet">
    </script>
</head>
<body>

    <table class="header-table">
        <tr>
            <td width="50%">
                @if($logoData)
                    <img src="{{ $logoData }}" style="width: 100px; height: auto;">
                @else
                    <div class="invoice-brand bold">AMT Coaches Ltd</div>
                @endif
                <div>
                    London Gateway Services,</br>
                    M1, London,</br>
                    NW7 3HU, UK<br>
                    Tel: +447564447775<br>
                    Email: info@amtcoaches.co.uk
                </div>
            </td>
            <td width="50%" class="text-right" style="vertical-align: top;">
                <h1 style="margin:0; color: #555;">INVOICE</h1>
                <span class="bold">INVOICE: {{ $invoice->invoice_ref }}</span><br>
                DATE: {{ \Carbon\Carbon::parse($invoice->issued_date)->format('d/m/Y') }}<br>
                DUE DATE: {{ \Carbon\Carbon::parse($invoice->due_date)->format('d/m/Y') }}
            </td>
        </tr>
    </table>

    <hr>

    <table class="header-table" style="margin-top: 20px;">
        <tr>
            <td width="50%" style="vertical-align: top;">
                <div class="bold">INVOICE TO</div>
                {{ $invoice->client_name }}<br>
                {!! nl2br(e($invoice->client_address)) !!}
            </td>
            <td width="50%" class="text-right" style="vertical-align: top;">
                <span class="bold">DATE OF TRAVEL:</span> {{ \Carbon\Carbon::parse($invoice->travel_date)->format('jS F Y') }}<br>
                <span class="bold">PASSENGERS:</span> {{ $invoice->passengers }}<br>
                <span class="bold">DEPARTURE/RETURN:</span> {{ $invoice->pickup_times }} / {{ $invoice->return_times }}
            </td>
        </tr>
    </table>

    <table class="items-table">
        <thead>
            <tr>
                <th>DATE</th>
                <th>DESCRIPTION</th>
                <th>QTY</th>
                <th>RATE</th>
                <th>AMOUNT</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoice->items as $item)
            <tr>
                <td>{{ \Carbon\Carbon::parse($invoice->travel_date)->format('d/m/Y') }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->qty }}</td>
                <td>£{{ number_format($item->rate, 2) }}</td>
                <td>£{{ number_format($item->amount, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table class="totals-section">
        <tr>
            <td class="bold">SUBTOTAL</td>
            <td class="text-right">£{{ number_format($invoice->total_amount, 2) }}</td>
        </tr>
        <tr>
            <td class="bold">VAT TOTAL (0%)</td>
            <td class="text-right">£0.00</td>
        </tr>
        <tr class="total-row">
            <td class="bold">TOTAL DUE</td>
            <td class="text-right bold">£{{ number_format($invoice->total_amount, 2) }}</td>
        </tr>
    </table>

    <footer>
        <div class="bank-info">
        <div class="bold text-center puppies-play-regular">DRIVEN BY COMFORT, POWERED BY TRUST</div>
        {{-- Sort Code: 40-20-16 | Account No: 11063278 [cite: 32]<br>
        IBAN: GB10HBUK40201611063278 [cite: 32]<br><br>
        <small>Payment is kindly due 7 days prior to the trip date. We are unable to provide transport without prior payment. [cite: 30]</small> --}}
        </div>

        <div style="margin-top: 20px; font-size: 9px; text-align: center; color: #888;">
            VAT Registration No: :{{ config('app.vat_number') }} | AMT Coaches
        </div>
    </footer>

</body>
</html>