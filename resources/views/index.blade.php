@extends('Layouts.MasterPage')
@section('title','Buy Hosting | 7-Days Free Trial')
@section('home','active')
@section('page_css')
<link rel="stylesheet" href="assets/css/pages/shared-hosting.css">
<link rel="stylesheet" href="assets/css/pages/domains.css">
<link rel="stylesheet" href="assets/css/pages/dedi-servers.css">

<style>
  .fade {
    display: none;
}
</style>

@endsection
@section('contents')
 
  <!-- Header -->
  <!-- <div class="header text-lg-left text-center" style="background: #FFD369;!important"> -->

    @include('Layouts.home_sliders')

  <!-- Section I -->
  {{--<div class="se-i text-lg-left text-center">
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-lg-3 col-6 mb-lg-0 mb-2">
          <!-- box -->
          <div class="box">
            <img data-src="assets/images/icons/mail.svg" class="lazy box-icon" alt="Mail">
            <h2 class="box-title mb-0">Anonymous<br>Access</h2>
          </div>
        </div>

        <!-- col -->
        <div class="col-lg-3 col-6 mb-lg-0 mb-2">
          <!-- box -->
          <div class="box">
            <img data-src="assets/images/icons/logout.svg" class="lazy box-icon" alt="Logout">
            <h2 class="box-title mb-0">No Usage<br>Logs</h2>
          </div>
        </div>

        <!-- col -->
        <div class="col-lg-3 col-6">
          <!-- box -->
          <div class="box">
            <img data-src="assets/images/icons/digital.svg" class="lazy box-icon" alt="Digital">
            <h2 class="box-title mb-0">No Usage<br>Limit</h2>
          </div>
        </div>

        <!-- col -->
        <div class="col-lg-3 col-6">
          <!-- box -->
          <div class="box">
            <img data-src="assets/images/icons/wishlist.svg" class="lazy box-icon" alt="Wishlist">
            <h2 class="box-title mb-0">100% White . .<br>Listed</h2>
          </div>
        </div>
      </div>
    </div>
  </div>--}}

  <!-- Section Popular OS -->
  <div class="se-ii bg-2">
    <div class="container">
      <!-- row -->
      <div class="row align-items-center">
        <!-- col -->
        <div class="col-xl-4 col-12 text-xl-left text-center mb-xl-0 mb-5">
          <!-- title-1 -->
          <h2 class="title-1 mb-1">
            <span>Popular</span><br class="d-xl-block d-none">
            <span>operating</span><br class="d-xl-block d-none">
            <span>systems.</span><br>
            <span class="primary-color">VPS Hosting.</span>
          </h2>
          <!-- para-1 -->
          <p class="para-1 mb-0">With ability to upload your own Operating system.</p>
        </div>
        <!-- col -->
        <div class="col-xl-8 col-12">
          <!-- row -->
          <div class="row justify-content-center">
            <!-- col -->
            <div class="col-lg-2 col-md-3 col-6">
              <!-- item -->
              <div class="item text-center">
                <img data-src="assets/images/os/windows.png" class="lazy img-fluid" alt="Windows">
                <h3 class="text mb-0">Windows</h3>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-2 col-md-3 col-6">
              <!-- item -->
              <div class="item text-center">
                <img data-src="assets/images/os/android.png" class="lazy img-fluid" alt="Android">
                <h3 class="text mb-0">Android</h3>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-2 col-md-3 col-6">
              <!-- item -->
              <div class="item text-center">
                <img data-src="assets/images/os/ubuntu.png" class="lazy img-fluid" alt="Ubuntu">
                <h3 class="text mb-0">Ubuntu</h3>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-2 col-md-3 col-6">
              <!-- item -->
              <div class="item text-center">
                <img data-src="assets/images/os/debian.png" class="lazy img-fluid" alt="Debian">
                <h3 class="text mb-0">Debian</h3>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-2 col-md-3 col-6">
              <!-- item -->
              <div class="item text-center">
                <img data-src="assets/images/os/centos.png" class="lazy img-fluid" alt="CentOS">
                <h3 class="text mb-0">CentOS</h3>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-2 col-md-3 col-6">
              <!-- item -->
              <div class="item text-center">
                <img data-src="assets/images/os/open-suse.png" class="lazy img-fluid" alt="Open Suse">
                <h3 class="text mb-0">Suse</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

  <!-- Section Clients Slider -->

  @include('Layouts.clients_slider')
  <!-- Section III -->
  @include('Layouts.display_package')

  <!-- Section IV -->
  <div class="se-iv py-90 bg-2">
    <div class="container">
      <!-- se-head -->
      <div class="se-head">
        <h3 class="se-title-1">Software & Products</h3>
        <h4 class="se-title-2">We provide software solutions</h4>
      </div>
      <!-- space -->
      <div class="space space-sm"></div>
      <!-- row -->
      <div class="row justify-content-center">
        <!-- col -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
          <!-- box -->
          <div class="box color-1">
            <!-- link -->
            <a href="#" class="box-link"></a>
            <!-- icon -->
            <div class="icon">
              <img data-src="assets/images/icons/email.svg" class="lazy img-fluid" alt="businessman">
            </div>
            <!-- box-title -->
            <h4 class="box-title">Bulk SMS<br>Solutions</h4>
            <!-- box-para -->
            <p class="box-para">Web appliaction system to send SMS notifications for schools, businesses institutions etc.<br>Thankfully.</p>
            <!-- arrow -->
            <div class="arrow text-right">
              <img data-src="assets/images/icons/right-arrow.svg" class="lazy img-fluid" alt="Right-Arrow">
            </div>
          </div>
        </div>
        <!-- col -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
          <!-- box -->
          <div class="box color-2">
            <!-- link -->
            <a href="#" class="box-link"></a>
            <!-- icon -->
            <div class="icon">
              <img data-src="assets/images/icons/priority.svg" class="lazy img-fluid" alt="priority">
            </div>
            <!-- box-title -->
            <h4 class="box-title">Management<br>Portals</h4>
            <!-- box-para -->
            <p class="box-para">Manage your business, clients, sales, expenses, products,invoices made easy</p>
            <!-- arrow -->
            <div class="arrow text-right">
              <img data-src="assets/images/icons/right-arrow.svg" class="lazy img-fluid" alt="Right-Arrow">
            </div>
          </div>
        </div>
        <!-- col -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
          <!-- box -->
          <div class="box color-3">
            <!-- link -->
            <a href="#" class="box-link"></a>
            <!-- icon -->
            <div class="icon">
              <img data-src="assets/images/icons/mission.svg" class="lazy img-fluid" alt="mission">
            </div>
            <!-- box-title -->
            <h4 class="box-title">System API<br>Integration</h4>
            <!-- box-para -->
            <p class="box-para">Integrate your platform with other systems with  latest technology XML,SOP,JSON etc</p>
            <!-- arrow -->
            <div class="arrow text-right">
              <img data-src="assets/images/icons/right-arrow.svg" class="lazy img-fluid" alt="Right-Arrow">
            </div>
          </div>
        </div>
        <!-- col -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
          <!-- box -->
          <div class="box color-4">
            <!-- link -->
            <a href="#" class="box-link"></a>
            <!-- icon -->
            <div class="icon">
              <img data-src="assets/images/icons/hula-hoop.svg" class="lazy img-fluid" alt="hula-hoop">
            </div>
            <!-- box-title -->
            <h4 class="box-title">Software Tech <br>Support.</h4>
            <!-- box-para -->
            <p class="box-para">Software installation, maintenance and troubleshooting</p>
            <!-- arrow -->
            <div class="arrow text-right">
              <img data-src="assets/images/icons/right-arrow.svg" class="lazy img-fluid" alt="Right-Arrow">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- FAQs -->
 
@endsection