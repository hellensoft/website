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
}
