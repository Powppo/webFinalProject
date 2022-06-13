
<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Final Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

@section('content')
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('layouts.updateProfile') }}">
                    @csrf
                    @method('PUT')
					<span class="login100-form-title p-b-26">
						My Profile
					</span>
                    <!--Name-->
					<li class="list-group-item"><b>Name </b>{{$users->name}}</li>
                    <!--Email-->
                    <li class="list-group-item"><b>Name </b>{{$users->name}}</li>
                    <!--Password-->
					
                    <!--Confirm Password-->
                    
                    <!--Button-->
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="login">
							Log in
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<div id="dropDownSelect1"></div>
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
</body>
</html>