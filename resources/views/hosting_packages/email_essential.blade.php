@extends('Layouts.MasterPage')
@section('title','Business Emails')
@section('business_email','active')
@section('page_css')
<link rel="stylesheet" href="assets/css/pages/shared-hosting.css">
<link rel="stylesheet" href="assets/css/pages/domains.css">
<link rel="stylesheet" href="assets/css/pages/dedi-servers.css">
@endsection
@section('contents')
  <!-- Header -->
  <div class="header text-lg-left text-center" style="background: #FFD369;!important">
    <div class="container">
      <!-- navigator -->
      <div class="navigator d-md-flex align-items-center justify-content-start d-none">
        <!-- title -->
        <div class="title">Hosting / Email Hosting</div>
        <!-- item -->
       
        <a href="" class="item active">Business</a>
        <a href="" class="item">Professional Email</a>
      </div>
    </div>
    <div class="container position-relative">
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-xl-6 col-lg-8">
          <!-- title-5 -->
          <h5 class="title-5">Get started with standard package.</h5>
          <!-- title-1 -->
          <h1 class="title-1">Professional<br>Email with the features you need.</h1>
          <!-- para-1 -->
          <p class="para-1 mb-3">With HS-Hosting Standard Hosting, whether you use the Website Builder or traditional WordPress, you get all the features, tools, and guidance you need to build and launch truly impressive WordPress websites.</p>
          <!-- btn -->
          {{-- <button type="button" data-click-type="scroll-to" data-scroll="#se-i" class="btn btn-fill-primary shadow-off font-500">Get Started</button> --}}
        </div>
      </div>
      <!-- hero -->
      <img src="assets/images/pages/shared-hosting/emails.png" class="lazy hero img-fluid" alt="Image" style=" width: 700px; height:auto;">

      <!-- <img class="lazy img-fluid" alt="Icon" src="assets/images/pages/shared-hosting/standard_image.png" style=" width: 100px; height=auto;"> -->
    </div>
  </div>

  <!-- Email Packages2 starts here-->
  <div class="se-iii py-90">
    <div class="container">
      
      <div class="se-head">
      <h3 class="se-title-1">Email package plans</h3>
        <h4 class="se-title-2">Professional email for your business</h4>
      </div>
      
      <div class="plans mb-xl-4 mb-2">
        
        <div class="row mx-xl-0">

          
          <div class="col-xl-6 col-md-6 mb-xl-0 mb-2 px-xl-0">
            
            @include('hosting_packages.packages.essential_email_plan')
          </div>
          
          <div class="col-xl-6 col-md-6 mb-xl-0 mb-2 px-xl-0">
            
            @include('hosting_packages.packages.premium_email_plan')
          </div>
        </div>
        
      </div>
      <div class="se-head mb-5">
        <a href="javascript:void(Tawk_API.toggle())" class="btn btn-fill-primary shadow-off font-500 "> Our team is ready to assist you. </a>
      </div>
    </div>
    
  </div>
  <!-- Email Packages2 starts here-->
  


  <div class="se-ii py-120-75">
    <div class="container">
      
      <div class="se-head mb-5">
        <h3 class="se-title-1">Product Features</h3>
        <h4 class="se-title-2">More features included</h4>
      </div>
      
      <div class="space space-sm"></div>
      
      <div class="row">
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/lock.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/lock-l.png" style="">
            </div>
            
            <h4 class="box-title">Domain Lock</h4>
            
            <p class="box-para">Prevent unauthorized transfers of your domain names, &amp; retain control to unlock domains if you so please.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/renew.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/renew-l.png" style="">
            </div>
            
            <h4 class="box-title">Auto-renewal</h4>
            
            <p class="box-para pr-xl-2">If you forget to renew your domain, you could lose it (gasp!). That's why we set up auto renew, so you don't gotta worry.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/forward-button.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/forward-button-l.png" style="">
            </div>
            
            <h4 class="box-title">Email forwarding</h4>
            
            <p class="box-para pr-xl-2">If you'd like, automatically forward any of your domain's email addresses to any other valid email address.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/shield.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/shield-l.png" style="">
            </div>
            
            <h4 class="box-title">Privacy protection</h4>
            
            <p class="box-para pr-xl-2">For a small fee, you can protect your personal information from being publicly available on the WHOIS database.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/dns.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/dns-l.png" style="">
            </div>
            
            <h4 class="box-title">DNS management</h4>
            
            <p class="box-para pr-xl-2">Route your DNS to us, another host, dedicated IPs, the moon — wherever you'd like (minus the moon part).</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/brain.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/brain-l.png" style="">
            </div>
            
            <h4 class="box-title">Easy management</h4>
            
            <p class="box-para pr-xl-2">Our control panel is designed for ease of use. Manage your online awesomeness from one single dashboard.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/bell.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/bell-l.png" style="">
            </div>
            
            <h4 class="box-title">Status alerts</h4>
            
            <p class="box-para pr-xl-2">Prevent unauthorized transfers of your domain names, &amp; retain control to unlock domains if you so please.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/jack-cable.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/jack-cable-l.png" style="">
            </div>
            
            <h4 class="box-title">Simple &amp;  Intuitive</h4>
            
            <p class="box-para pr-xl-2">We integrate seamlessly with WordPress, WebsiteBuilder, and SiteLock, to name a few. We'll help you get online with ease.</p>
          </div>
        </div>


        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/dns.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/dns-l.png" style="">
            </div>
            
            <h4 class="box-title">SSH Access</h4>
            
            <p class="box-para pr-xl-2">Route your DNS to us, another host, dedicated IPs, the moon — wherever you'd like (minus the moon part).</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/brain.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/brain-l.png" style="">
            </div>
            
            <h4 class="box-title">Backup and Restore</h4>
            
            <p class="box-para pr-xl-2">Our control panel is designed for ease of use. Manage your online awesomeness from one single dashboard.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/bell.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/bell-l.png" style="">
            </div>
            
            <h4 class="box-title">One click installer</h4>
            
            <p class="box-para pr-xl-2">Prevent unauthorized transfers of your domain names, &amp; retain control to unlock domains if you so please.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/jack-cable.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/jack-cable-l.png" style="">
            </div>
            
            <h4 class="box-title">Easy Migration</h4>
            
            <p class="box-para pr-xl-2">We integrate seamlessly with WordPress, WebsiteBuilder, and SiteLock, to name a few. We'll help you get online with ease.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  @include('tawkAPI.migration_widget')
@endsection