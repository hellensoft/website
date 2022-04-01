@extends('Layouts.MasterPage')
@section('title','Contact us')
@section('contact_us','active')
@section('page_css')

<link rel="stylesheet" href="assets/css/pages/contact.css">
@endsection
@section('contents')

<div class="se-i">
    <div class="container">
      
      <div class="row">
        
        <div class="col-lg-6 left-col d-flex flex-column justify-content-between">
          
          <div class="t-s mb-lg-0 mb-5">
            
            <h2 class="title-2">Contact Us</h2>
            <h1 class="title-1">Get in Touch With Us</h1>
            <p class="para-1">Every guide is trained and excited to work with you, whether you need help with a password reset or you're looking for a team to build your complete web presence.</p>
          </div>
          
          <div class="b-s">
            
            <div class="row">
              
              <div class="col-xl-4 col-lg-6 col-md-4 col-6 mb-xl-0 mb-2">
                
                <div class="box">
                  
                  <div class="icon">
                    <img src="./assets/images/pages/contact/icons/home.png" class="lazy img-fluid" alt="icon">
                  </div>
                  
                  <p class="text">Bains Singh Ave<br>Masaki Dar Es Salaam</p>
                </div>
              </div>
              
              <div class="col-xl-4 col-lg-6 col-md-4 col-6 mb-lg-0 mb-2">
                
                <div class="box">
                  
                  <div class="icon">
                    <img src="{{asset('assets/images/pages/contact/icons/envelope.png')}}" class="lazy img-fluid" alt="icon">
                  </div>
                  
                  <a href="" class="text">info@hellensoft.co.tz</a>
                  <p class="text">Mail Us 24/7</p>
                </div>
              </div>
              
              <div class="col-xl-4 col-lg-6 col-md-4 col-6">
                
                <div class="box">
                  
                  <div class="icon">
                    <img src="assets/images/pages/contact/icons/phone-call.png" class="lazy img-fluid" alt="icon">
                  </div>
                  
                  <a href="#" class="text">+255 765044281</a>
                  <p class="text">Contact Us 24/7</p>
                </div>
              </div>              
            </div>
          </div>
        </div>
        <div class="col-lg-6 right-col">
          
          <form action="contact-form" class="contact-form ml-auto" id="contact-form" method="POST">
            @csrf
            <h1 class="form-title">Fill up the form and our team will get back to you within 24 hours.</h1>
            
            <label for="fname" class="form-label">
              <span class="input-label">Full Name</span>
              <input type="text" name="name" id="name" class="form-input" placeholder="" required="">
              <span class="state"></span>
            </label>

            <label for="fname" class="form-label">
              <span class="input-label">Phone numner</span>
              <input type="text" name="phone" id="name" class="form-input" placeholder="" required="">
              <span class="state"></span>
            </label>
            
            <label for="email" class="form-label">
              <span class="input-label">Email</span>
              <input type="text" name="email" id="email" class="form-input" placeholder="" required="">
              <span class="state"></span>
            </label>
            
            <label for="msg" class="form-label">
              <span class="input-label">Message</span>
              <textarea name="msg" id="msg" rows="5" class="form-input" placeholder="" required=""></textarea>
              <span class="state"></span>
            </label>
            
            <div class="buttons mt-2">
              <button type="submit" class="btn btn-sm btn-fill-success shadow-off text-uppercase w-100">Send</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>


@endsection