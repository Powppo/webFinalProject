<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Final Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  </header>
  <!-- End Header -->
    <!--Test-->

    <!--Test-->
    <!-- ======= Upload Section ======= -->
    <section id="upload">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
    
        <body>
          <div class="limiter">
            <div style="margin-top: 90px">
                <form class="form-control" method="POST" action="{{ url('updateProfile', $edit->id) }}">
                        @csrf
                  <h4>
                    <div style="text-align: center">
                      Edit Profile!
                    </div>
                  </h4>
                  <!--Name-->
                  <h6 style="margin-bottom: 5px">Name Edit</h6>
                  <div class="wrap-input100 validate-input" style="margin-bottom: 15px">
                    <input class="form-control" id="name" type="name" class="form-control" name="name" value="{{ $edit->name }}" autofocus>
                  </div>

                  <!--Location-->
                  <h6 style="margin-bottom: 5px">Location Edit</h6>
                  <div class="wrap-input100 validate-input" style="margin-bottom: 15px">
                    <input class="form-control" id="address" type="address" class="form-control" name="address" value="{{ $edit->address }}" autofocus>
                  </div>

                  <!--Contact-->
                  <h6 style="margin-bottom: 5px">Contact Edit</h6>
                  <div class="wrap-input100 validate-input" style="margin-bottom: 15px">
                    <input class="form-control" id="phoneNumber" type="phoneNumber" class="form-control" name="phoneNumber" value="{{ $edit->phoneNumber }}" autofocus>
                  </div>
                  
                  <!--Email-->
                  <h6 style="margin-bottom: 5px">Email Edit</h6>
                  <div class="wrap-input100 validate-input" style="margin-bottom: 15px">
                    <input class="form-control" id="email" type="email" class="form-control" name="email" value="{{ $edit->email }}" autofocus>
                  </div>


                  <!--Button-->
                  <div style="margin-bottom: 7px">
                    <button type="submit" id="upload"  class="btn btn-dark" style="margin-left: 1134px">Apply Changes</button>
                  </div>
                  
                  @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
    </section>
    <!-- End Upload Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="position: relative; margin-top: 370px">
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

</html>