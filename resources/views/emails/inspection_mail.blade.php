<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vehicle Inspection Report</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        
        .report-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 20px;
        }
        
        .header h2 {
            color: #2c3e50;
            margin: 0;
            font-size: 28px;
        }
        
        .company-logo {
            max-width: 150px;
            margin-bottom: 15px;
        }
        
        .vehicle-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            background-color: #f1f9ff;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 25px;
        }
        
        .info-item {
            margin: 5px 0;
        }
        
        .info-item strong {
            color: #2980b9;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }
        
        th {
            background-color: #3498db;
            color: white;
            padding: 12px;
            text-align: left;
        }
        
        td {
            padding: 10px 12px;
            border-bottom: 1px solid #ddd;
        }
        
        tr:nth-child(even) {
            background-color: #f8f8f8;
        }
        
        tr:hover {
            background-color: #f1f1f1;
        }
        
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #3498db;
        }
        
        .confirmation-text {
            background-color: #f1f9ff;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 30px;
        }
        
        .signature-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-top: 30px;
            gap: 20px;
        }
        
        .signature-box {
            flex: 1;
            min-width: 0;
            text-align: center;
        }
        
        .signature-line {
            border-top: 1px solid #333;
            height: 1px;
            margin-bottom: 5px;
            width: 100%;
        }
        
        .signature-label {
            font-size: 14px;
            color: #555;
            white-space: nowrap;
            text-align: center;
        }
        
        .status-good {
            color: #27ae60;
            font-weight: bold;
        }
        
        .status-bad {
            color: #e74c3c;
            font-weight: bold;
        }
        
        .status-warning {
            color: #f39c12;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="report-container">
        <div class="header">
            <!-- Replace with your company logo -->
            <img src="company-logo.png" alt="Company Logo" class="company-logo">
            <h2>VEHICLE INSPECTION REPORT</h2>
        </div>
        
        <div class="vehicle-info">
            <div class="info-item"><strong>Driver Name:</strong> {{ $driver ?? 'N/A' }}</div>
            <div class="info-item"><strong>Vehicle Reg No:</strong> {{ $vechicleRegNum ?? 'N/A' }}</div>
            <div class="info-item"><strong>Inspection Date:</strong> {{ $date }}</div>
            <div class="info-item"><strong>Odometer Reading:</strong> {{ $odometerReading ?? 'N/A' }} km</div>
            <div class="info-item"><strong> Depot:</strong> {{ $depot }}</div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Component</th>
                    <th>Inspection Point</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $inspectionFields = include resource_path('data/inspection_fields.php');
                @endphp

                @foreach ($inspectionData as $field => $value)
                    <tr>
                        <td>{{ $field }}</td>
                        <td>{{ $inspectionFields[$value['key']] ?? $value['key'] }}</td>
                        <td class="status-{{ strtolower($value['value']) }}">
                            {{ $value['value'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="footer">
            <div class="confirmation-text">
                <p><strong>CONFIRMATION:</strong> I hereby certify that I have conducted a thorough inspection of the above vehicle and confirm that all items were checked according to the company's vehicle maintenance policy. The vehicle is in the condition as described in this report.</p>
            </div>
            
            <div class="signature-section">
                <div class="signature-box">
                    <div class="signature-line"></div>
                    <div class="signature-label">Inspector's Signature</div>
                </div>
                <div class="signature-box">
                    <div class="signature-line"></div>
                    <div class="signature-label">Driver's Signature</div>
                </div>
                <div class="signature-box">
                    <div class="signature-line"></div>
                    <div class="signature-label">Date</div>
                </div>
                <div class="signature-box">
                    <div class="signature-line"></div>
                    <div class="signature-label">Position</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>