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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div data-aos="fade-in">
        <div class="hero-logo">
          <img class="" src="{{ asset('style/assets/img/logo3.png')}}" alt="Imperial">
        </div>
        <main class="py-4">
          @yield('content')
        </main>
        <h2><span class="typed" data-typed-items="Welcome to Final Project!, Please Login to access our features!"></span></h2>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo mr-auto"><img src="{{ asset('style/assets/img/logo3.png')}}" alt=""></a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Imperial</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#uploadx">Upload Photo</a></li>
              <li><a class="nav-link scrollto" href="#purchase">Choose & Purchase</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#upload">Uploads</a></li>
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

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">About Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Our entire Career, Journey, and Motivation</p>
            </div>
        </div>
      </div>
      <div class="container about-container" data-aos="fade-up" data-aos-delay="200">
        <div class="row">

          <div class="col-lg-6 about-img">
            <img src="{{ asset('style/assets/img/streetAbout-img.jpg')}}" alt="">
          </div>

          <div class="col-md-6 about-content">
            <h2 class="about-title">Our Journey</h2>
            <p class="about-text">
              For a couple of years now we have been on an otherworldly adventure that has caused a move in my spirit. We started to feel that as my point of view on life developed, my motivation for taking photos didn’t impact me any longer. It as of late hit me that my explanations behind adoring photography could advance inside me also.
            </p>
            <p class="about-text">
              I used to take pictures trying to stop time. I felt frantic to clutch past recollections, instead of living now.
            </p>
            <p class="about-text">
              When I glance back at old photos, I would prefer not to feel that mixed sentimentality for what used to be. I rather what to be re-propelled to find that inclination of affection for what is in my present life…
            </p>
          
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-md-12">
            <h3 class="section-title">Our Services</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Our Website Features & Services we want to introduce</p>
          </div>
        </div>

        <section id="uploadx">
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 service-item">
              <div class="service-icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="service-title"><a class="nav-link scrollto" href="#upload">Upload your Photo</a></h4>
              <p class="service-description">Upload any photos and get your first income!</p>
            </div>
          </div>
        </section>

        <section id="purchase">
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 service-item">
              <div class="service-icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="service-title"><a class="nav-link scrollto " href="#portfolio">Choose and Purchase Photo</a></h4>
              <p class="service-description">Choose any photos and get the license of the photos, use it for everything!</p>
            </div>
          </div>
        </div>
        </section>
        
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Gallery</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Provide the best Photography from the best Photographer</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Street</li>
              <li data-filter=".filter-card">Nature</li>
              <li data-filter=".filter-web">Animal</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('style/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Street 1</h4>
              <p>Street Photography</p>
              <a href="{{ asset('style/assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Street 1"><i class="bi bi-plus"></i></a>
              <a href={{ route('layouts.galleries') }} class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('style/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Animal 1</h4>
              <p>Animal Photography</p>
              <a href="{{ asset('style/assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Animal 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('style/assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Street 2</h4>
              <p>Street Photography</p>
              <a href="{{ asset('style/assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Street 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{ asset('style/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nature 1</h4>
              <p>Nature Photography</p>
              <a href="{{ asset('style/assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Nature 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('style/assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Animal 2</h4>
              <p>Animal Photography</p>
              <a href="{{ asset('style/assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Animal 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('style/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Street 3</h4>
              <p>Street Photography</p>
              <a href="{{ asset('style/assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Street 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{ asset('style/assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nature 2</h4>
              <p>Nature Photography</p>
              <a href="{{ asset('style/assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Nature 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{ asset('style/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nature 3</h4>
              <p>Nature Photography</p>
              <a href="{{ asset('style/assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Nature 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('style/assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Animal 3</h4>
              <p>Animal Photography</p>
              <a href="{{ asset('style/assets/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Animal 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Upload Section ======= -->
    <section id="upload">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Upload</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Please Click Button Below to Upload your Picture!</p>
          </div>
        </div>
    
        <body>
          <div class="limiter">
            <div class="container-login100">
                <form class="login100-form validate-form" method="GET" action="{{ route('uploadsPage') }}">
                        @csrf
                  <!--Button-->
                  <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                      <div class="login100-form-bgbtn"></div>
                      <button type="submit" id="upload" class="login100-form-btn">
                        Click Here to Upload Your Picture 
                      </button>
                    </div>
                  </div>
        
    </section>
    <!-- End Upload Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Team</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Let us introduce who works on this Project!</p>
          </div>
        </div>

        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2">

          <div class="col">
            <div class="member">
              <div class="pic"><img src="{{ asset('style/assets/img/team/afrizal.jpg')}}" alt=""></div>
              <h4>Muhammad Afrizal Hamimudin</h4>
              <span>Member 1</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="member">
              <div class="pic"><img src="{{ asset('style/assets/img/team/team-3.png')}}" alt=""></div>
              <h4>Muhammad Aristya Prayitno</h4>
              <span>-</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>
    </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Final Project</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

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