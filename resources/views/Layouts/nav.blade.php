<nav class="theme-navbar" id="theme-navbar">
    <!-- notices-bar -->
    <!-- <div class="notices-bar" id="notices-bar">
      <div class="container-fluid">
        <div class="content">
          <p class="text">HS-Hosting Special Deals! Save 75% on all Shared Hosting Plans & Locations</p>
          <a href="#" class="action-btn">Buy Now</a>
          <div class="close-btn" id="close-notices-bar-btn">
            <img src="assets/images/templates/navbar/close.png" class="img-fluid" alt="Down Arrow">
          </div>
        </div>
      </div>
    </div> -->


    <div class="container">
      <!-- nav-top -->
      <div class="nav-top d-flex align-items-center">
        <!-- menu-icon -->
        <div class="menu-icon" id="open-links-btn">
          <img src="assets/images/templates/navbar/hamburger.png" class="menu-icon img-fluid" alt="HostX">
        </div>
        <!-- brand -->
        <a href="{{URL::to('/')}}" class="brand d-flex align-items-center">
          <img src="assets/images/templates/navbar/hs_logo_dark.png" class="dt-img img-fluid" style="width:250px; height:auto;" alt="HostX">
          <img src="assets/images/templates/navbar/hs_logo_light.png" class="lt-img img-fluid" style="width:250px; height:auto;" alt="HostX">
          <!-- <img src="assets/images/templates/navbar/logo-l.png" class="lt-img img-fluid" alt="HostX"> -->
        </a>
        <!-- options -->
        <div class="options d-md-flex d-none align-items-center justify-content-end ml-auto">
          <!-- c-link -->
          <a href="tel:+255 765044281" class="c-link">
            <img src="assets/images/templates/navbar/phone-call.png" style="color:black; width:auto; height:20px;" alt="icon">
            <span class="text">+255 765044281</span>
          </a>
          <a href="https://panel.hellencp.com/login?r=%2F" target="blank" class="c-link">
            <img src="assets/images/templates/navbar/gear.png" class="icon" alt="icon">
            <span class="text">Control Panel</span>
          </a>
          <!-- c-link -->
          <a href="https://mail.hellencp.com/" target="blank" class="c-link">
            <img src="assets/images/templates/navbar/network.png" class="icon" alt="icon">
            <span class="text">Web Mail</span>
          </a>
          <!-- buttons -->
          <div class="buttons">
          <a href="https://shop.hellencp.com/" target="blank" class="c-link">
            <img src="assets/images/icons/shopping.svg" class="icon" alt="icon">
            <span class="text">Host Shop</span>
          </a>
         
            <!-- <a href="trial.html" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm">Free Trial</a>
            <a href="login.html" class="btn btn-outline-dark btn-sm btn-rounded shadow-off text-uppercase">Login</a> -->
          </div>
          <!-- lang -->
          <div class="lang" id="lang">
            <!-- current -->
            <div class="current">EN
              <img src="assets/images/icons/outline-font-icons/fi-rr-angle-small-down.svg" class="img-fluid" alt="Icon">
            </div>
            <!-- lang-menu -->
            <div class="lang-menu" id="lang-menu">
              <a href="#" class="lang-item active">English</a>
              <!-- <a href="#" class="lang-item">Italian</a>
              <a href="#" class="lang-item">Arabic</a>
              <a href="#" class="lang-item">French</a>
              <a href="#" class="lang-item">German</a>
              <a href="#" class="lang-item">Chinese</a>
              <a href="#" class="lang-item">English</a>
              <a href="#" class="lang-item">Italian</a>
              <a href="#" class="lang-item">Arabic</a>
              <a href="#" class="lang-item">French</a>
              <a href="#" class="lang-item">German</a>
              <a href="#" class="lang-item">Chinese</a>
              <a href="#" class="lang-item">English</a>
              <a href="#" class="lang-item">Italian</a>
              <a href="#" class="lang-item">Arabic</a>
              <a href="#" class="lang-item">French</a>
              <a href="#" class="lang-item">German</a>
              <a href="#" class="lang-item">Chinese</a> -->
            </div>
          </div>
        </div>
        <!-- second-options -->
        <div class="second-options d-md-none d-flex align-content-center justify-content-end ml-auto">
          <!-- o-link -->
          <a href="kb.html" class="o-link">
            <img src="assets/images/templates/navbar/question-mark.png" class="icon" alt="Icon">
          </a>
          <!-- o-link -->
          <div class="o-link user-link" id="user-menu-btn">
            <img src="assets/images/templates/navbar/profile.png" class="icon" alt="Icon">
            <!-- user-dropdown-menu -->
            <ul class="user-dropdown-menu list-unstyled" id="user-dropdown-menu">
              <!-- uddm-link-parent -->
              <li class="uddm-link-parent">
                <div class="title-2">Registered Users</div>
                <p class="para-2">Have an account? Sign in now.</p>
                <a href="#" class="uddm-link">Sign In</a>
              </li>
              <!-- uddm-link-parent -->
              <li class="uddm-link-parent">
                <div class="title-2">New Customer</div>
                <p class="para-2">New to HELLENSoft? Create an account to get started today.</p>
                <a href="#" class="uddm-link">Create an Account</a>
              </li>
            </ul>
          </div>
          <!-- o-link -->
          <a href="#" class="o-link">
            <img src="assets/images/templates/navbar/cart.png" class="icon" alt="Icon">
          </a>
        </div>
      </div>
      <!-- nav-bottom -->
      <div class="nav-bottom d-flex align-items-center ">
        <!-- info -->
        <!-- <div class="info d-flex align-items-center">
       
          <a href="tel:0000" class="item">
            <img src="assets/images/icons/fill-font-icons/fi-sr-phone-call.svg" class="img-fluid" alt="Icon">
            <span class="text">+255 765044281</span>
          </a>
        </div> -->
        <!-- links -->
        <!-- <div class="links d-xl-flex align-items-center ml-auto" id="theme-navbar-links"> -->
        <div class="links d-xl-flex align-items-center" id="theme-navbar-links">
          <!-- close-links-btn -->
          <div class="close-links-btn" id="close-links-btn">
            <img src="assets/images/templates/navbar/close.png" class="img-fluid" alt="Close">
          </div>
          <!-- link -->
          <div class="link @yield('home')">
            <a href="./">Home</a>
          </div>

          <!-- <div class="link">
            <a href="https://shop.hellencp.com/domain-search" target="blank">Domains</a>
          </div> -->

           <!-- link -->
           <div class="link has-dropdown-menu  @yield('web_hosting')" id="domain">
            <a href="#">Domain</a>
            <!-- dropdown-menu -->
            <ul class="dropdown-menu list-unstyled">
              <!-- group-title -->
              <!-- <li class="group-title">Linux based</li> -->
              <!-- dm-link -->
              <li><a href="https://shop.hellencp.com/domain-search" target="blank" class="dm-link">
              <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon" style="width:20px; height:auto;">&nbsp;
                Search Domain Names</a></li>
              <!-- dm-link -->

              <!-- <li><a href="{{URL::to('premium_linux')}}" class="dm-link">
              <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon"style="width:20px; height:auto;">&nbsp;
                Transfer Domain Names</a></li>

              <li><a href="{{URL::to('premium_linux')}}" class="dm-link">
              <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon"style="width:20px; height:auto;">&nbsp;
                Protect Domain Names</a></li>

              <li><a href="{{URL::to('premium_linux')}}" class="dm-link">
              <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon"style="width:20px; height:auto;">&nbsp;
                 Domain Names Lookup</a></li> -->

        
            </ul>
          </div>
          <!-- link -->
          
           <!-- link -->
           <div class="link has-dropdown-menu  @yield('web_hosting')" id="hosting">
            <a href="#">Web & Email Hosting</a>
            <!-- dropdown-menu -->
            <ul class="dropdown-menu list-unstyled">
              <!-- group-title -->
              <li class="group-title">Linux based</li>
              <!-- dm-link -->
              <li><a href="{{URL::to('standard_linux')}}" class="dm-link">
              <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon" style="width:20px; height:auto;">&nbsp;
                Standard Hosting Package</a></li>
              <!-- dm-link -->
              <li><a href="{{URL::to('premium_linux')}}" class="dm-link">
              <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon"style="width:20px; height:auto;">&nbsp;
                Premium Hosting Package</a></li>

              <li class="group-title">Business Email</li>
              <!-- dm-link -->
              <li><a href="{{URL::to('email_essential')}}" class="dm-link">
              <img src="assets/images/icons/email_icon.png" class="img-fluid" alt="Email" style="width:20px; height:auto;">&nbsp;
              Professional Email Packages</a>
              </li>  
           
              <!-- group-title -->
              <!-- <li class="group-title">WordPress &amp; Hosting</li> -->
              <!-- dm-link -->
              <!-- <li><a href="abuse.html" class="dm-link">WordPress Package</a></li> -->
              <!-- group-title -->
              <!-- <li class="group-title">Windows Hosting</li> -->
              <!-- dm-link -->
              <!-- <li><a href="login.html" class="dm-link">Windows Web Hosting</a></li> -->
              <!-- dm-link -->
            </ul>
          </div>
          <!-- link -->

          <div class="link @yield('contact_us')">
            <a href="{{URL::to('contact_us')}}">VPS Hosting</a>
          </div>
         
           <!-- link -->
           <div class="link has-dropdown-menu @yield('business_email')">
            <!-- <a href="#">Professional Email</a> -->
            <!-- dropdown-menu -->
            <ul class="dropdown-menu list-unstyled">
              <!-- group-title -->
              <li class="group-title">Fast and Reliable email service</li>
              <!-- dm-link -->
              <li><a href="{{URL::to('email_essential')}}" class="dm-link">
              <img src="assets/images/icons/email_icon.png" class="img-fluid" alt="Email" style="width:20px; height:auto;">&nbsp;
              Professional Email Packages</a>
              </li>
              <!-- dm-link -->
              <!-- <li><a href="{{URL::to('email_premium')}}" class="dm-link">
              <img src="assets/images/icons/gmail.svg" class="img-fluid" alt="Email" style="width:20px; height:auto;">&nbsp; Email Premium</a>
            </li> -->
              <!-- dm-link -->
              <!-- group-title -->
              <li class="group-title">xyz@yourDomain</li>
              <!-- dm-link -->
             
            </ul>
          </div>
          <!-- link -->
          <!-- <div class="link">
            <a href="#">Windows Hosting</a>
          </div> -->
          <!-- link -->
          <!-- <div class="link">
            <a href="#">Windows VPS Hosting</a>
          </div> -->
          <!-- link -->
          <!-- <div class="link">
            <a href="#">Features</a>
          </div> -->
          <!-- link -->
          <!-- <div class="link">
            <a href="#">Support</a>
          </div> -->
          <!-- link -->
          <!-- <div class="link">
            <a href="#">FAQ</a>
          </div> -->
          <!-- link -->
          <div class="link @yield('contact_us')">
            <a href="{{URL::to('contact_us')}}">Contact</a>
          </div>

          <!-- link -->
          <!-- indicator -->
          <!-- <span class="indicator"></span> -->
        </div>
        <!-- side-box-btn -->
        <!-- <div class="side-box-btn" id="side-box-btn">
            <span class="lines">
              <span></span>
              <span></span>
              <span></span>
            </span>Product & Services
        </div> -->
      </div>
      <!-- side-box -->
      <div class="side-box scroll-area" id="side-box">
        <!-- mega-menu -->
        <div class="mega-menu">
          <!-- f-nav -->
          <div class="f-nav d-flex align-items-center justify-content-start flex-wrap">
            <span class="f-nav-tab active" data-filter="all">All</span>
            <span class="f-nav-tab" data-filter="apps">Web Products</span>
            <span class="f-nav-tab" data-filter="compute">Compute</span>
            <span class="f-nav-tab" data-filter="storage">Storage</span>
            <span class="f-nav-tab" data-filter="networking">Networking</span>
            <span class="f-nav-tab" data-filter="hosting">Hosting</span>
            <span class="indicator"></span>
          </div>
          <!-- content -->
          <div class="content">
            <!-- f-area & all -->
            <div class="f-area all">
              <!-- apps -->
              <div class="apps mb-3">
                <!-- cate-title -->
                <h3 class="cate-title">Top Apps</h3>
                <!-- boxes -->
                <div class="boxes">
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/gmail.svg" class="img-fluid" alt="Gmail">
                      </span>
                    <span class="title">Gmail</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/discord.svg" class="img-fluid" alt="Discord">
                      </span>
                    <span class="title">Discord</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/airbnb.svg" class="img-fluid" alt="Airbnb">
                      </span>
                    <span class="title">Airbnb</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/slack.svg" class="img-fluid" alt="Slack">
                      </span>
                    <span class="title">Slack</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/reddit.svg" class="img-fluid" alt="Reddit">
                      </span>
                    <span class="title">Reddit</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/yahoo.svg" class="img-fluid" alt="Reddit">
                      </span>
                    <span class="title">Yahoo</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/evernote.svg" class="img-fluid" alt="Reddit">
                      </span>
                    <span class="title">Evernote</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/dropbox.svg" class="img-fluid" alt="Reddit">
                      </span>
                    <span class="title">Dropbox</span>
                  </a>
                </div>
              </div>
              <!-- others -->
              <div class="others">
                <!-- cate-title -->
                <h3 class="cate-title">Recommended</h3>
                <!-- items -->
                <div class="items">
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Virtual Private Server</span>
                        <span class="des">Flexible virtual machines</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/laptop.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Business Analysis</span>
                        <span class="des">Start your host business</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/data-protection.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Cloud Hosting</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Dedicated Servers</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/shield.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Data Security</span>
                        <span class="des">Keep your data safe</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/globe.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Web Hosting</span>
                        <span class="des">Start hosting your website</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Virtual Private Server</span>
                        <span class="des">Flexible virtual machines</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/laptop.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Business Analysis</span>
                        <span class="des">Start your host business</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/data-protection.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Cloud Hosting</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Dedicated Servers</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/shield.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Data Security</span>
                        <span class="des">Keep your data safe</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/globe.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Web Hosting</span>
                        <span class="des">Start hosting your website</span>
                      </span>
                  </a>
                </div>
              </div>
            </div>
            <!-- f-area & apps -->
            <div class="f-area apps">
              <!-- apps -->
              <div class="apps mb-2">
                <!-- cate-title -->
                <h3 class="cate-title">Popular</h3>
                <!-- boxes -->
                <div class="boxes">
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/gmail.svg" class="img-fluid" alt="Gmail">
                      </span>
                    <span class="title">Gmail</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/discord.svg" class="img-fluid" alt="Discord">
                      </span>
                    <span class="title">Discord</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/airbnb.svg" class="img-fluid" alt="Airbnb">
                      </span>
                    <span class="title">Airbnb</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/slack.svg" class="img-fluid" alt="Slack">
                      </span>
                    <span class="title">Slack</span>
                  </a>
                  <!-- app-box -->
                  <a href="#" class="app-box">
                      <span class="frame">
                        <img src="assets/images/icons/reddit.svg" class="img-fluid" alt="Reddit">
                      </span>
                    <span class="title">Reddit</span>
                  </a>
                </div>
              </div>
              <!-- apps -->
              <div class="apps">
                <!-- cate-title -->
                <h3 class="cate-title">All Apps</h3>
                <!-- boxes -->
                <div class="boxes">
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/gmail.svg" class="img-fluid" alt="Gmail">
                      </span>
                    <span class="title">Gmail</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/discord.svg" class="img-fluid" alt="Discord">
                      </span>
                    <span class="title">Discord</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/airbnb.svg" class="img-fluid" alt="Airbnb">
                      </span>
                    <span class="title">Airbnb</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/slack.svg" class="img-fluid" alt="Slack">
                      </span>
                    <span class="title">Slack</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/reddit.svg" class="img-fluid" alt="Reddit">
                      </span>
                    <span class="title">Reddit</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/yahoo.svg" class="img-fluid" alt="Yahoo">
                      </span>
                    <span class="title">yahoo</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/evernote.svg" class="img-fluid" alt="Evernote">
                      </span>
                    <span class="title">Evernote</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/dropbox.svg" class="img-fluid" alt="Dropbox">
                      </span>
                    <span class="title">Dropbox</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/shopping.svg" class="img-fluid" alt="Shopify">
                      </span>
                    <span class="title">Shopify</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/skype.svg" class="img-fluid" alt="Skype">
                      </span>
                    <span class="title">Skype</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/github-1.svg" class="img-fluid" alt="Github">
                      </span>
                    <span class="title">Github</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/pinterest.svg" class="img-fluid" alt="Pinterest">
                      </span>
                    <span class="title">Pinterest</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/hashtag.svg" class="img-fluid" alt="Hashtag">
                      </span>
                    <span class="title">Hashtag</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/tinder.svg" class="img-fluid" alt="Tinder">
                      </span>
                    <span class="title">Tinder</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/yahoo.svg" class="img-fluid" alt="Yahoo">
                      </span>
                    <span class="title">yahoo</span>
                  </a>
                  <!-- small-app-box -->
                  <a href="#" class="small-app-box">
                      <span class="frame">
                        <img src="assets/images/icons/evernote.svg" class="img-fluid" alt="Evernote">
                      </span>
                    <span class="title">Evernote</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- f-area & compute -->
            <div class="f-area compute">
              <!-- others -->
              <div class="others">
                <!-- cate-title -->
                <h3 class="cate-title">All</h3>
                <!-- items -->
                <div class="items">
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Virtual Private Server</span>
                        <span class="des">Flexible virtual machines</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/laptop.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Business Analysis</span>
                        <span class="des">Start your host business</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/data-protection.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Cloud Hosting</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Dedicated Servers</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/shield.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Data Security</span>
                        <span class="des">Keep your data safe</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/globe.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Web Hosting</span>
                        <span class="des">Start hosting your website</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Virtual Private Server</span>
                        <span class="des">Flexible virtual machines</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/laptop.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Business Analysis</span>
                        <span class="des">Start your host business</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/data-protection.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Cloud Hosting</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Dedicated Servers</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/shield.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Data Security</span>
                        <span class="des">Keep your data safe</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/globe.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Web Hosting</span>
                        <span class="des">Start hosting your website</span>
                      </span>
                  </a>
                </div>
              </div>
            </div>
            <!-- f-area & storage -->
            <div class="f-area storage">
              <!-- others -->
              <div class="others">
                <!-- cate-title -->
                <h3 class="cate-title">All</h3>
                <!-- items -->
                <div class="items">
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Virtual Private Server</span>
                        <span class="des">Flexible virtual machines</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/laptop.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Business Analysis</span>
                        <span class="des">Start your host business</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/data-protection.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Cloud Hosting</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Dedicated Servers</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/shield.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Data Security</span>
                        <span class="des">Keep your data safe</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/globe.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Web Hosting</span>
                        <span class="des">Start hosting your website</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Virtual Private Server</span>
                        <span class="des">Flexible virtual machines</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/laptop.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Business Analysis</span>
                        <span class="des">Start your host business</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/data-protection.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Cloud Hosting</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Dedicated Servers</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/shield.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Data Security</span>
                        <span class="des">Keep your data safe</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/globe.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Web Hosting</span>
                        <span class="des">Start hosting your website</span>
                      </span>
                  </a>
                </div>
              </div>
            </div>
            <!-- f-area & networking -->
            <div class="f-area networking">
              <!-- others -->
              <div class="others">
                <!-- cate-title -->
                <h3 class="cate-title">All</h3>
                <!-- items -->
                <div class="items">
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Virtual Private Server</span>
                        <span class="des">Flexible virtual machines</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/laptop.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Business Analysis</span>
                        <span class="des">Start your host business</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/data-protection.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Cloud Hosting</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Dedicated Servers</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/shield.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Data Security</span>
                        <span class="des">Keep your data safe</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/globe.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Web Hosting</span>
                        <span class="des">Start hosting your website</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Virtual Private Server</span>
                        <span class="des">Flexible virtual machines</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/laptop.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Business Analysis</span>
                        <span class="des">Start your host business</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/data-protection.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Cloud Hosting</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Dedicated Servers</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/shield.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Data Security</span>
                        <span class="des">Keep your data safe</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/globe.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Web Hosting</span>
                        <span class="des">Start hosting your website</span>
                      </span>
                  </a>
                </div>
              </div>
            </div>
            <!-- f-area & hosting -->
            <div class="f-area hosting">
              <!-- others -->
              <div class="others">
                <!-- cate-title -->
                <h3 class="cate-title">All</h3>
                <!-- items -->
                <div class="items">
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Virtual Private Server</span>
                        <span class="des">Flexible virtual machines</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/laptop.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Business Analysis</span>
                        <span class="des">Start your host business</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/data-protection.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Cloud Hosting</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Dedicated Servers</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/shield.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Data Security</span>
                        <span class="des">Keep your data safe</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/globe.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Web Hosting</span>
                        <span class="des">Start hosting your website</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Virtual Private Server</span>
                        <span class="des">Flexible virtual machines</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/laptop.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Business Analysis</span>
                        <span class="des">Start your host business</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/data-protection.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Cloud Hosting</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/server-1.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Dedicated Servers</span>
                        <span class="des">Powerful bare metal servers</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/shield.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Data Security</span>
                        <span class="des">Keep your data safe</span>
                      </span>
                  </a>
                  <!-- item -->
                  <a href="#" class="item">
                    <!-- icon -->
                    <img src="assets/images/icons/globe.svg" class="icon img-fluid" alt="Icon">
                    <!-- item-con -->
                    <span class="item-con">
                        <span class="name">Web Hosting</span>
                        <span class="des">Start hosting your website</span>
                      </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- close-side-box-btn -->
        <div class="close-side-box-btn" id="close-side-box-btn">
          <img src="assets/images/templates/navbar/close.png" class="img-fluid" alt="Close">
        </div>
      </div>
    </div>
  </nav>