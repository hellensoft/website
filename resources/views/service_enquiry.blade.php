@extends('Layouts.MasterPage')
@section('title','Contact us')
@section('contact_us','active')
@section('page_css')

<link rel="stylesheet" href="assets/css/index.css">
@endsection
@section('contents')
<div class="main-header"style="background-color:#ECF4FA; background-image:none; !important">
    <div class="container">
         <!-- se-head -->
      <div class="se-head">
        <h3 class="se-title-1">Service and Consultancy</h3>
        <h4 class="se-title-2">We are ready to serve you.</h4>
      </div>
      <!-- space -->
      <!-- <div class="row align-items-center"> -->
      <div class="row">

      <div class="col-xl-6" style="align-content:center;">
       <object data="assets/images/pages/contact/service_enquiry.svg" style="height: 480px; width:auto"  alt="Image"></object>
      </div>
      <div class="col-xl-6 ">
          
          <div class="contact-form ml-auto" id="form-container">
            
            <form action="service_enquiry_req" method="POST" class="" id="header-form">
              @csrf
              <div class="inputs">

                <label for="email" class="form-label">
                  <input type="name" name="name" class="glassy" id="email" placeholder="Full Name" autocomplete="off" required="">
                </label>
                <label for="email" class="form-label">
                  <input type="email" name="email" class="glassy" id="email" placeholder="Email address " required="">
                </label>

                <label for="phone" class="form-label">
                  <input type="text" name="phone" class="glassy" id="email" placeholder="Phone number" autocomplete="off" required="">
                </label>
                <label for="service" class="form-label">
                  <select name="service" id="" class="glassy">
                      <option value="">Select Service</option>
                      <option value="Domain">Domain</option>
                      <option value="Web Hosting">Web Hosting</option>
                      <option value="Business Email">Business Email</option>
                      <option value="Web Development">Web Development</option>
                      <option value="Web Systems">Web Systems</option>
                      <option value="Web security/SSL">Web security/SSL</option>
                  </select>
                </label>

                <label for="password" class="form-label">
                  <textarea name="description" id="" cols="30" rows="10" placeholder="Brief tell us how can we help you."></textarea>
                </label>

              </div>

              
              <button type="submit" class="btn btn-fill-success shadow-off w-100 font-500 mb-2 mt-1">REQUEST</button>

            </form>
          </div>
        </div>

      </div>
    </div>
</div>

@endsection
