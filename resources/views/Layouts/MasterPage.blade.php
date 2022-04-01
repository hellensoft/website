<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="theme-color" content="#0060fe">
  <meta name="title" content="HostX | HTML5 Hosting Template">
  <meta name="description" content="Your all in one solution to grow online. Start a free trial to create a beautiful website, get a domain name, fast hosting, online marketing and award-winning 24/7 support.">
  <meta name="keywords" content="Buy VPS, Buy VPS Hosting,Buy Cheap VPS, Free VPS, Trial VPS">
  <meta name="language" content="en">
  <link rel="shortcut icon" href="assets/images/theme/favicon.png" type="image/x-icon">
  <!-- link -->
  <link rel="stylesheet" href="assets/css/bundle.min.css">
  <link rel="stylesheet" href="assets/css/fonts.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/templates.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <!--Psecific page-->
  @yield('page_css')
    
  <!-- title -->
  <title>@yield('title')</title>

</head>
<body class="position-relative index-page light-theme" id="index-page">
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

  <!-- Preloader -->
  <!-- <div class="preloader" id="preloader">
    <div class="content d-flex align-items-center justify-content-center">
      <div class="spinner"></div>
    </div>
  </div>   -->
  <!-- Navbar -->
@include('Layouts.nav')

<!--------Contents here--->
@yield('contents')


  <!-- theme-settings-btn -->
  <button type="button" class="theme-settings-btn" id="theme-settings-btn" data-tooltip="Theme Settings">
    <img src="assets/images/templates/theme-settings/settings-sliders.svg" class="img-fluid" alt="Icon">
  </button>

  <!-- theme-settings -->
  <div class="theme-settings" id="theme-settings">
    <!-- title-1 -->
    <div class="title-1">Website setup</div>
    <!-- close-btn -->
    <div class="close-btn" id="theme-settings-close-btn">
      <img src="assets/images/templates/theme-settings/close.png" class="img-fluid" alt="Icon">
    </div>
    <!-- section -->
    <div class="section">
      <!-- section-title -->
      <div class="section-title">Themes</div>
      <!-- themes -->
      <div class="themes">
        <!-- theme-btn -->
        <div class="theme-btn light-theme active-theme" id="light-theme-btn">
          <div class="color"></div>
          <span class="name">Light</span>
        </div>
        <!-- theme-btn -->
        <div class="theme-btn dark-theme" id="dark-theme-btn">
          <div class="color"></div>
          <span class="name">Dark</span>
        </div>
      </div>
    </div>
    <!-- section -->
    <div class="section">
      <!-- section-title -->
      <!-- <div class="section-title">Features</div>     -->
      <!-- feature-option -->
      <!-- <div class="feature-option" data-theme-option="desktop-view">
        <span class="text">Desktop View</span>
        <span class="switch-btn"></span>
      </div> -->
      <!-- feature-option -->
      <!-- <div class="feature-option" data-theme-option="hide-popups">
        <span class="text">Hide Hot Deals Popups</span>
        <span class="switch-btn"></span>
      </div>
    </div> -->
    <!-- section -->
    <!-- <div class="section"> -->
      <!-- section-title -->
      <!-- <div class="section-title">Quick Links</div> -->
      <!-- q-link -->
      <!-- <div class="q-link">
        <a href="#">How to reset cookies?</a>
      </div> -->
      <!-- q-link -->
      <!-- <div class="q-link">
        <a href="#">What about privacy policy?</a>
      </div> -->
      <!-- q-link -->
      <!-- <div class="q-link">
        <a href="#">Can not reset server settings?</a>
      </div> -->
      <!-- q-link -->
      <!-- <div class="q-link">
        <a href="#">How to upgrade my current plan?</a>
      </div> -->
      <!-- q-link -->
      <!-- <div class="q-link">
        <a href="#">What is the different between .com and .net?</a>
      </div> -->
    </div>
    <!-- section -->
    <!-- <div class="section"> -->
      <!-- section-title -->
      <!-- <div class="section-title">Copyright</div> -->
      <!-- copyright-text -->
      <!-- <p class="copyright-text">Copyright © 2021, HostX Operating Company, LLC. All Rights Reserved. The HostX word mark is a registered trademark of HostX Operating Company,</p> -->
    </div>
  </div>

  <!-- Cookies Dialog -->
  <div class="cookies-dialog" id="cookies-dialog">
    <div class="container">
      <!-- content -->
      <div class="content">
        <!-- title-3 -->
        <h3 class="title-3">Your privacy matters</h3>
        <!-- div -->
        <div class="d-lg-flex align-items-end">
          <!-- para-1 -->
          <p class="para-1 mr-3">We use cookies to provide our services and for analytics and marketing. To find out more about our use of cookies, please see our Privacy Policy and Cookie and Tracking Notice. By continuing to browse our website, you agree to our use of cookies.<br><a href="#">Settings</a></p>
          <!-- buttons -->
          <div class="buttons text-right">
            <button type="button" class="btn btn-fill-primary btn-sm shadow-off" id="cookies-dialog-btn">I Understand</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Contact Bubble -->
  <!-- <div class="contact-bubble">
    live-chat-btn 
    <a href="#" class="live-chat-btn">
      <img src="assets/images/icons/chat.svg" class="img-fluid" alt="Icon">
      <span class="text">Live Chat</span>
    </a>
  </div> -->

  <!-- Theme Footer -->
  <footer class="theme-footer">
    <!-- footer-top -->
    <div class="footer-top">
      <div class="container-fluid">
        <!-- list-group -->
        
      </div>
    </div>
    <!-- footer-middle -->
    <div class="footer-middle">
      <div class="container-fluid">
        <!-- reg-bar -->
        <div class="reg-bar text-md-left text-center">
          <div class="d-lg-flex align-items-center justify-content-between">
            <!-- text -->
            <div class="text">
              <!-- title-4 -->
              <h4 class="title-4">Get your business online today<br>save up to 10% off</h4>
              <!-- para-2 -->
              <p class="para-2">Enjoy our premium features with high perfomance servers</p>
            </div>
            <!-- buttons -->
            <div class="buttons mt-lg-0 mt-3">
              <a href="{{URL::to('standard_linux')}}" class="btn btn-fill-primary shadow-off text-uppercase font-500">Get started Now!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer-bottom -->
    <div class="footer-bottom">
      <div class="container-fluid">
        <!-- content -->
        <div class="content d-flex align-items-start mb-2">
          <!-- logo -->
          <div class="logo mb-lg-0 mb-1">
            <a href="#">
              <img src="assets/images/templates/navbar/hs_logo_dark.png" style="width:200px; height:auto; !important" class="img-fluid" alt="HostX">              
            </a>
          </div>
          <!-- copyright -->
          <div class="copyright mr-lg-5">
            <!-- links -->
            <ul class="links list-unstyled d-flex align-items-center flex-wrap">
              <li><a href="{{URL::to('terms')}}">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Trademarks</a></li>
              <li><a href="#">License Agreements</a></li>
            </ul>
            <!-- para-3 -->
            <p class="para-3">Copyright &copy; {{date('Y')}}, HELLENSoft, All Rights Reserved. The HS-Hosting word mark is a registered trademark of HELLENSoft,</p>
          </div>
          <!-- social-list -->
          <ul class="social-list list-unstyled d-flex align-items-center justify-content-lg-end justify-content-center ml-lg-auto mt-lg-0 mt-2">
            <!-- <li><a href="#"><img src="assets/images/templates/footer/twitter.png" alt="Icon"></a></li> -->
            <!-- <li><a href="#"><img src="assets/images/templates/footer/instagram.png" alt="Icon"></a></li> -->
            <li><a href="https://www.facebook.com/HellenSoft-238561340308171" target="blank"><img src="assets/images/templates/footer/facebook.png" alt="Icon"></a></li>
            <li><a href="https://www.instagram.com/hellensoft_/" target="blank"><img src="assets/images/templates/footer/linkedin.png" alt="Icon"></a></li>
          </ul>
        </div>
        <!-- content -->
        <div class="content d-lg-flex align-items-end flex-wrap">
          <!-- para-3 -->
          <p class="para-3">Use of this Site is subject to express terms of use.<br>By using this site, you signify that you agree to be bound by these <a href="#">Universal Terms of Service</a>.</p>
          <!-- sign -->
          <div class="signature ml-auto mt-lg-0 mt-1">
            <p class="para-3">Developed by <a href="">HELLENSoft</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- jquery-3.3.1.min.js -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>  
  <!-- jquery.lazy.min.js -->
  <script src="assets/js/jquery.lazy.min.js"></script> 
  <!-- jQuery.cookies.js -->
  <script src="assets/js/jQuery.cookies.js"></script>
  <!-- templates.js -->
  <script src="assets/js/templates.js"></script>
  <!-- script.js -->
  <script src="assets/js/script.js"></script>  
  @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>
