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
            'pickupaddress' => 'required',
            'dropoffaddress' => 'required',
            'pickupdate' => 'required',
            'dropoffdate' => 'required',
            'pickuptime' => 'required',
            'dropofftime' => 'required',
            'noofpassenger' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request -> phone,
            'pickupaddress' => $request -> pickupaddress,
            'dropoffaddress' => $request -> dropoffaddress,
            'pickupdate' => $request -> pickupdate,
            'dropoffdate' => $request -> dropoffdate,
            'pickuptime' => $request -> pickuptime,
            'dropofftime' => $request -> dropofftime,
            'noofpassenger' => $request -> noofpassenger,
            'subject' => 'Massage From Enquiry Form'
        ];

        // $messages = [
        //     'g-recaptcha-response.required' => 'You must check the reCAPTCHA.',
        //     'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        // ];
 
        Mail::to('booking@amtcoaches.co.uk')->send(new EnquiryMail($data));

        return redirect('/')->with('success', 'Message sent successfully!');
    }
}
