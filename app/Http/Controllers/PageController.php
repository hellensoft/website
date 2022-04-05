<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use Illuminate\Support\Facades\Mail;
Use App\Mail\ContactForm;

class PageController extends Controller
{
    public function standard_linux(){
        return view('hosting_packages.standard_linux');
    }

    public function premium_linux(){
        return view('hosting_packages.premium_linux');
    }

    public function email_essential(){
        return view('hosting_packages.email_essential');
    }

    public function email_premium(){
        return view('hosting_packages.email_premium');
    }


    public function domain_search(){

        return view('domains.domain_search');
    }

    public function contact_us(){
        return view('contact');
    }

    public function bulk_sms(){
        return view('bulk_sms');
    }
    
    public function contact_form(Request $request){
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $msg=$request->msg;
        Mail::to('20i@hellensoft.co.tz')->send(new ContactForm($name,$email,$msg,$phone));
        Alert::success('Your message has been sent successfully!', 'Done!');
        return redirect()->route('contact_us');
    }
       

    public function terms(){
        return view('terms');
    }

    public function about(){
        return view('about');
    }
}
