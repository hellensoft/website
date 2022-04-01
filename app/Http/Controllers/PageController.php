<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;

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
}
