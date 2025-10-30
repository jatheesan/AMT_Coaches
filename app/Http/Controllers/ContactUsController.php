<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactUsController extends Controller
{
    public function sendEmail(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request -> phone,
            'subject' => 'Massage From Contact Form'
        ];

        // $messages = [
        //     'g-recaptcha-response.required' => 'You must check the reCAPTCHA.',
        //     'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        // ];
 
        Mail::to('info@amtcoaches.co.uk')->send(new ContactMail($data));

        return redirect('/contact')->with('success', 'Message sent successfully!');
    }
}
