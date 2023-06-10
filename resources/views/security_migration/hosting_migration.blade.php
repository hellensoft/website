@extends('Layouts.MasterPage')
@section('title','Hosting Migration')
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
       
        <a href="" class="item">Hosting Migration</a>
      </div>
    </div>
    <div class="container position-relative">
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-xl-6 col-lg-8">
          <!-- title-5 -->
          <h5 class="title-5">Automatically migrate all your file.</h5>
          <!-- title-1 -->
          <h1 class="title-1">Easy migrate your file to our hosting</h1>
          <!-- para-1 -->
          <p class="para-1 mb-3">
            What’s even more dangerous is when other companies engage in something called ‘data scraping’ to collect personal data from publicly available sources like WHOIS to sell it to third parties.
          </p>
          <!-- btn -->
          {{-- <button type="button" data-click-type="scroll-to" data-scroll="#display_ssl_package" class="btn btn-fill-primary shadow-off font-500">Migrate Now</button> --}}
          <a href="javascript:void(Tawk_API.toggle())" class="btn btn-fill-primary shadow-off font-500"> Migrate Now </a>
        </div>
      </div>
      <!-- hero -->
      <img src="assets/images/pages/hosting-migration.svg" class="lazy hero img-fluid" alt="Image" style=" width: 700px; height:auto; padding-bottom: 70px;
    margin-left: 60px;">
    </div>
  </div>
 
  <div class="se-ii py-120-75">
    <div class="container">
      
      <div class="se-head mb-5">
        <h3 class="se-title-1">Easy as yo Go!</h3>
        <h4 class="se-title-2">Seamless process with our modern tools</h4>
      </div>
      
      <div class="space space-sm"></div>
      
      <div class="row">
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/expert.svg" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/expert.svg" style="">
            </div>
            
            <h4 class="box-title">Contact our expert</h4>
            
            <p class="box-para">Ensure your customers have an encrypted browsing experience on your website</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/migration_tools.svg" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/migration_tools.svg" style="">
            </div>
            
            <h4 class="box-title">Use our medern tools</h4>
            
            <p class="box-para pr-xl-2">Establish authority, trust and peace of mind in your business.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/relax.svg" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/relax.svg" style="">
            </div>
            
            <h4 class="box-title">Seat back and relax</h4>
            
            <p class="box-para pr-xl-2">Decrease the rate of abandoned baskets and increase successful checkouts.</p>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          
          <div class="box">
            
            <div class="box-icon d-flex align-items-center justify-content-start">
              <img class="d-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/done.svg" style="display: inline;">
              <img class="l-img lazy img-fluid" alt="Icon" src="assets/images/pages/domains/icons/done.svg" style="">
            </div>
            
            <h4 class="box-title">Let the tools finish the work!</h4>
            
            <p class="box-para pr-xl-2">It’s easier for your competition to stalk you if your personal information is easily accessible. </p>
          </div>
        </div>


      </div>
    </div>
  </div>

  {{-- @include('Layouts.ssl_package') --}}
@include('tawkAPI.migration_widget')
@endsection