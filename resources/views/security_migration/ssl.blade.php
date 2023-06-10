@extends('Layouts.MasterPage')
@section('title','SSL Certificate')
@section('web_hosting','active')
@section('page_css')
<link rel="stylesheet" href="assets/css/pages/shared-hosting.css">
<link rel="stylesheet" href="assets/css/pages/domains.css">
<link rel="stylesheet" href="assets/css/pages/dedi-servers.css">
<!-- <link rel="stylesheet" href="assets/css/pages/about.css"> -->
@endsection
@section('contents')
  <!-- Header -->
  <div class="header text-lg-left text-center" style="background:#f9f9f9 !important">
    <div class="container">
      <!-- navigator -->
      <div class="navigator d-md-flex align-items-center justify-content-start d-none">
        <!-- title -->
        <div class="title">Security & Migration</div>
        <!-- item -->
       
        <a href="" class="item">SSL Certificate</a>
      </div>
    </div>
    <div class="container position-relative">
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-xl-6 col-lg-8">
          <!-- title-5 -->
          <h5 class="title-5">Easy setup get started SSL certificate</h5>
          <!-- title-1 -->
          <h1 class="title-1">Secure your Website <br>and Data Online</h1>
          <!-- para-1 -->
          <p class="para-1 mb-3">
          We offer SSL certificates at different price points to cater for all budgets including zero budget! Not having an SSL can actually cost you more in lost custom and abandoned baskets. 
          </p>
          <!-- btn -->
          <a href="javascript:void(Tawk_API.toggle())" class="btn btn-fill-primary shadow-off font-500 ">Secure your domain now. </a>
          {{-- <button type="button" data-click-type="scroll-to" data-scroll="#display_ssl_package" class="btn btn-fill-primary shadow-off font-500">Order Now</button> --}}
        </div>
      </div>
      <!-- hero -->
      <img src="assets/images/pages/ssl.svg" class="lazy hero img-fluid" alt="Image" style=" width: 700px; height:auto; padding-bottom: 70px;
    margin-left: 60px;">
    </div>
  </div>
 
  <div class="se-ii py-120-75">
    <div class="container">
      
      <div class="se-head mb-5">
        <h3 class="se-title-1">Security</h3>
        <h4 class="se-title-2">Why SSL Certificates?</h4>
      </div>
      
      <div class="space space-sm"></div>
      
      <div class="row">
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/secure_browsing.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/secure_browsing.png" style="">
            </div>
            
            <h4 class="box-title">Secure browsing</h4>
            
            <p class="box-para">Ensure your customers have an encrypted browsing experience on your website</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/rating.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/rating.png" style="">
            </div>
            
            <h4 class="box-title">Customer trust</h4>
            
            <p class="box-para pr-xl-2">Establish authority, trust and peace of mind in your business.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/shopping-cart.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/shopping-cart.png" style="">
            </div>
            
            <h4 class="box-title">Secure checkouts</h4>
            
            <p class="box-para pr-xl-2">Decrease the rate of abandoned baskets and increase successful checkouts.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/search-engine-marketing.png" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/search-engine-marketing.png" style="">
            </div>
            
            <h4 class="box-title">Search engine rankings</h4>
            
            <p class="box-para pr-xl-2">Improve search engine rankings and associate your website with recognised brands</p>
          </div>
        </div>


      </div>
    </div>
  </div>

  @include('Layouts.ssl_package')

@include('tawkAPI.migration_widget')
@endsection