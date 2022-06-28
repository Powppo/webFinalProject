<head>
    <!--source-->
    <!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="loginStyle3/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginStyle3/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginStyle3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginStyle3/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginStyle3/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="loginStyle3/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginStyle3/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginStyle3/vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="loginStyle3/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginStyle3/css/util.css">
        <link rel="stylesheet" type="text/css" href="loginStyle3/css/main.css">
    <!--===============================================================================================-->
    
    <!--style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">
    
      <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
      <meta property="og:title" content="">
      <meta property="og:image" content="">
      <meta property="og:url" content="">
      <meta property="og:site_name" content="">
      <meta property="og:description" content="">
    
      <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="">
      <meta name="twitter:title" content="">
      <meta name="twitter:description" content="">
      <meta name="twitter:image" content="">
    
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    
      <!-- Vendor CSS Files -->
      <link href="{{ asset('style/assets/vendor/aos/aos.css')}}" rel="stylesheet">
      <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
      <link href="{{ asset('style/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
      <link href="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    
      <!-- Template Main CSS File -->
      <link href="{{ asset('style/assets/css/style.css')}}" rel="stylesheet">
    
      <!-- =======================================================
      * Template Name: Imperial - v5.7.0
      * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
    </head>
    <body>
      <!-- ======= Header ======= -->
      <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
    
          <a href="{{ route('home') }}" class="logo mr-auto"><img src="{{ asset('style/assets/img/logo3.png')}}" alt=""></a>
          <!-- Uncomment below if you prefer to use a text logo -->
          <!-- <h1 class="logo mr-auto"><a href="index.html">Imperial</a></h1> -->
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="{{ route('home') }}"><- Back to Homepage</a></li>
            @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif
    
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
    
              @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>
    
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      
                    <a class="dropdown-item" href="{{ route('layouts.showProfile') }}">
                          {{ __('My Profile') }}
                      </a>
                      
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
    
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
            @endguest
    
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header><!-- End Header -->
    
      <main id="main">

        <!--My Checkout Form-->
        <section id="upload">
          <div class="container" data-aos="fade-up">
            <div class="row">
              <div class="col-md-12">
              </div>
            </div>
        <body>
            <div class="limiter">
                <div class="container-login100" style="margin-top: 90px">
                  <div class="wrap-login100">
                    <form class="login100-form validate-form" method="POST" action="{{ route('checkouts_') }}" enctype="multipart/form-data">
                            @csrf
                      <span class="login100-form-title p-b-26">
                        Checkout your Photo!
                      </span>
                      <h4 style="text-align: center">Please select Payment Method and Terms!</h4>
                      <!--Payment Method-->
                      <h6 style="text-align: center">Payment Method</h6>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <select name="payment_method" id="payment_method" type="payment_method" class="form-control @error('payment_method') is-invalid @enderror" name="payment_method" required autocomplete="payment_method" autofocus>                     
                            <option selected></option>
                            <option>PayPal</option>
                            <option>Mobile Banking</option>
                            <option>Amazon Pay</option>
                          </select>
                        </div>
                    </div>
                    <!--Payment Term-->
                    <h6 style="text-align: center">Payment Term</h6>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <select name="payment_term" id="payment_term" type="payment_term" class="form-control @error('payment_term') is-invalid @enderror" name="payment_term" required autocomplete="payment_term" autofocus>
                            <option selected></option>
                            <option>Annually License</option>
                            <option>Monthly License</option>
                            <option>Lifetime License</option>
                          </select>
                        </div>
                      </div>
        <!--Button-->
            <div class="wrap-login100-form-btn" style="margin-top: 30px">
              <div class="login100-form-bgbtn"></div>
              <button type="submit" id="upload" class="login100-form-btn">
                Apply Checkout
              </button>
            </div>
          </div>
        </div>
        </body>
                
        </section>
        <!-- End My Galleries Form Section -->
    
      </main>
      <!-- End #main -->
    
      <!-- ======= Footer ======= -->
      <footer id="footer" style="position: relative; margin-top: 300px">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright">
                &copy; Copyright <strong>Final Project</strong>. All Rights Reserved
              </div>
              <div class="credits">
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer -->
    
      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    
      <!-- Vendor JS Files -->
      <script src="{{ asset('style/assets/vendor/aos/aos.js')}}"></script>
      <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('style/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
      <script src="{{ asset('style/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
      <script src="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{ asset('style/assets/vendor/typed.js/typed.min.js')}}"></script>
      <script src="{{ asset('style/assets/vendor/php-email-form/validate.js')}}"></script>
    
      <!--===============================================================================================-->
    <script src="loginStyle3/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="loginStyle3/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="loginStyle3/vendor/bootstrap/js/popper.js"></script>
        <script src="loginStyle3/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="loginStyle3/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="loginStyle3/vendor/daterangepicker/moment.min.js"></script>
        <script src="loginStyle3/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="loginStyle3/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="loginStyle3/js/main.js"></script>
    
      <!-- Template Main JS File -->
      <script src="{{ asset('style/assets/js/main.js')}}"></script>
    </body>