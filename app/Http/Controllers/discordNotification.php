<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class discordNotification extends Controller
{
    public function discord_contact(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'msg' => 'required',
        ]);

        Http::post('https://discord.com/api/webhooks/961624722565632061/7CGvCd7-JcYYE8VG-JrGZlMRrIq0YZbA6luPvqL6v90l-xKOh8pmPb-_tbcSeZWzj1-Y', [
            'content' => $request->msg,
            'embeds' => [
                [
                    'title' => $request->name,
                    'description' => "Email: " . $request->email . "\nPhone: " . $request->phone,
                    'color' => '7506394',
                ]
            ],
            
        ]);
        Alert::success('Your message has been sent successfully!', 'Done!');
        return redirect()->route('contact_us');

    }

    public function service_enquiry_req(Request $enquiry){
        // dd($enquiry->all());
        $enquiry->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'description' => 'required',
        ]);

        Http::post('https://discord.com/api/webhooks/961624722565632061/7CGvCd7-JcYYE8VG-JrGZlMRrIq0YZbA6luPvqL6v90l-xKOh8pmPb-_tbcSeZWzj1-Y', [
            'content' => $enquiry->description,
            'embeds' => [
                [
                    'title' => "Customer Information",
                    'description' => 
                    "Name: " . $enquiry->name.
                    "\nEmail: " . $enquiry->email.
                    "\nPhone: " . $enquiry->phone.
                    "\nservice: " . $enquiry->service,
                    'color' => '7506394',
                ]
            ],
            
        ]);
        Alert::success('Thank you for reaching out to us', 'Our expert will get back  to you as soon as possible!');
        return redirect()->route('service-enquiry');

    }
}
