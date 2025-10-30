<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InspectionReportMail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Http;

class PsvPcvInspectionController extends Controller
{
    //
    public function index()
    {
        return view('pages.amt-psv-pcv-inspection');
    }

    public function sendEmail(Request $request)
    {
        // $fields = $request->input('fields', []);

        // Transform into key => value array
        // $inspectionData = [];
        // foreach ($fields as $field) {
        //      $key = $field['key'];
        //      $label = resource_path("data/inspection_fields.$key", $key); 
        //     $inspectionData[$field['key']] = $field['value'];
            
        // }

        // $data = $request->all();

          $data = $request->validate([
        'depot_name' => 'required',
        'latitude' => 'nullable|numeric',
        'longitude' => 'nullable|numeric',
    ]);
  

    $addressName = null;

     if ($data['depot_name'] === 'current_location') {
        if ($data['latitude'] && $data['longitude']) {
            // Reverse geocode using OpenStreetMap Nominatim
            
            $response = Http::withHeaders([
                'User-Agent' => 'Your App Name/1.0 (your@email.com)',
                'Accept-Language' => 'en-US,en;q=0.9',
            ])->get('https://nominatim.openstreetmap.org/reverse', [
                'format' => 'json',
                'lat' => $data['latitude'],
                'lon' => $data['longitude'],
                'zoom' => 18,
                'addressdetails' => 1,
                
            ]);
            
            
            if ($response->successful()) {
                
                 $result = $response->json();
                //  $depot = $result['display_name'];

                 $address = $this->formatNominatimAddress($result['address']);
                $depot = $address ?: $result['display_name'];  

            }
        }
    
        } else {
             $depot = $request-> depot_name;
        }
    

        $driver_name = $request-> name;
        $vechicle_reg_num = $request-> registration_number;
        $date = $request-> choose_date;
        $odometer_reading = $request-> odometer_reading;
        // $depot = $request-> depot_name;

        $data = $request->input('fields', []);
 
        $fields = include resource_path('data/inspection_fields.php');

        $pdf = Pdf::loadView('emails.inspection_mail', [
            'driver' => $driver_name,
            'vechicleRegNum' => $vechicle_reg_num,
            'date' => $date,
            'odometerReading' => $odometer_reading,
            'depot' => $depot,
            'inspectionData' => $data,
            'inspectionFields' => $fields
        ]);

        // Mail::to('srijathee@itirepairs.co.uk')->send(new InspectionReportMail($inspectionData));
        Mail::to('psvinspector@amtcoaches.co.uk')
        ->cc('srijathee@itirepairs.co.uk')
        ->send(new InspectionReportMail($pdf->output()));

        return redirect('/')->with('success', 'Message sent successfully!');
    }

    // protected function formatNominatimAddress(array $address): string
    // {
    //     $parts = [];
        
    //     if (!empty($address['road'])) $parts[] = $address['road'];
    //     if (!empty($address['suburb'])) $parts[] = $address['suburb'];
    //     if (!empty($address['city'])) $parts[] = $address['city'];
    //     if (!empty($address['state'])) $parts[] = $address['state'];
    //     if (!empty($address['postcode'])) $parts[] = $address['postcode'];
    //     if (!empty($address['country'])) $parts[] = $address['country'];
        
    //     return implode(', ', $parts);
    // }
    protected function formatNominatimAddress(array $address): string
{
    // Prioritize house number + road combination first
    if (!empty($address['house_number']) && !empty($address['road'])) {
        return $address['house_number'] . ', ' . $address['road'] . 
               (!empty($address['postcode']) ? ', ' . $address['postcode'] : '') . 
               ', United Kingdom';
    }
    
    // Fallback to standard format
    $parts = [];
    $priorityFields = ['house_number', 'road', 'suburb', 'city', 'postcode', 'country'];
    
    foreach ($priorityFields as $field) {
        if (!empty($address[$field])) {
            $parts[] = $address[$field];
        }
    }
    
    return implode(', ', $parts);
}
}
