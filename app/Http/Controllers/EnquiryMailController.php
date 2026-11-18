<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMail;

class EnquiryMailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'business' => 'nullable',
            'pickupaddress' => 'required',
            'pickup_postcode' => 'nullable',
            'destinationaddress' => 'required',
            'destination_postcode' => 'nullable',
            'pickupdate' => 'required',
            'destinationdate' => 'required',
            'pickuptime' => 'required',
            'destinationtime' => 'required',
            'noofpassenger' => 'required',
            'luggage' => 'required',
            'journey_type' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'business' => $request->business,
            'pickupaddress' => $request->pickupaddress,
            'pickup_postcode' => $request->pickup_postcode,
            'destinationaddress' => $request->destinationaddress,
            'destination_postcode' => $request->destination_postcode,
            'pickupdate' => $request->pickupdate,
            'destinationdate' => $request->destinationdate,
            'pickuptime' => $request->pickuptime,
            'destinationtime' => $request->destinationtime,
            'noofpassenger' => $request->noofpassenger,
            'luggage' => $request->luggage,
            'journey_type' => $request->journey_type,
            'subject' => 'Message From Enquiry Form'
        ];

        // $messages = [
        //     'g-recaptcha-response.required' => 'You must check the reCAPTCHA.',
        //     'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        // ];

        Mail::to('booking@amtcoaches.co.uk')->send(new EnquiryMail($data));

        return redirect('/')->with('success', 'Message sent successfully!');
    }
}
