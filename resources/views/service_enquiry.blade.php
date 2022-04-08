@extends('Layouts.MasterPage')
@section('title','Contact us')
@section('contact_us','active')
@section('page_css')

<link rel="stylesheet" href="assets/css/pages/contact.css">
@endsection
@section('contents')

 <!-- FAQs -->
 <div class="faqs py-90" id="faqs">
    <div class="container">
      <!-- se-head -->
      <div class="se-head">
        <h3 class="se-title-2">HS-Service Enquiry</h3>
        <h4>Are you buying your first domain name? Here’s everything you need to know.</h4>
      </div>
      <!-- space -->
      <div class="space space-sm"></div>
      <!-- row -->
      <div class="row">
   
      <form action="discord_contact" class="contact-form ml-auto" id="contact-form" method="POST" data-dashlane-rid="448c72ea9b8168ef" data-form-type="contact">
            <input type="hidden" name="_token" value="xxW1cZIH1ZPtBWZ1EBc8c01DloblY3uKFnA6kOBv">            <h1 class="form-title">Fill up the form and our team will get back to you within 24 hours.</h1>
            
            <label for="fname" class="form-label" data-dashlane-label="true">
              <span class="input-label">Full Name</span>
              <input type="text" name="name" id="name" class="form-input" placeholder="" required="" data-dashlane-rid="6d8ee3db3ec3de19" data-form-type="name" data-kwimpalastatus="alive" data-kwimpalaid="1649411486461-0">
              <span class="state"></span>
            </label>

            <label for="fname" class="form-label" data-dashlane-label="true">
              <span class="input-label">Phone number</span>
              <input type="text" name="phone" id="name" class="form-input" placeholder="" required="" data-dashlane-rid="6dbcf5d393103c0e" data-form-type="phone" data-kwimpalastatus="alive" data-kwimpalaid="1649411486461-1">
              <span class="state"></span>
            </label>
            
            <label for="email" class="form-label" data-dashlane-label="true">
              <span class="input-label">Email</span>
              <input type="text" name="email" id="email" class="form-input" placeholder="" required="" data-dashlane-rid="5d9a121912b68dec" data-form-type="email" data-kwimpalastatus="alive" data-kwimpalaid="1649411486461-2">
              <span class="state"></span>
            </label>
            
            <label for="msg" class="form-label" data-dashlane-label="true">
              <span class="input-label">Message</span>
              <textarea name="msg" id="msg" rows="5" class="form-input" placeholder="" required="" data-dashlane-rid="b7eb6f5edd7be2bb" data-form-type="other"></textarea>
              <span class="state"></span>
            </label>
            
            <div class="buttons mt-2">
              <button type="submit" class="btn btn-sm btn-fill-success shadow-off text-uppercase w-100" data-dashlane-label="true" data-dashlane-rid="922a2fcde7337a1d" data-form-type="action">Send</button>
            </div>
          </form>
    
    </div>
  </div>

@endsection
