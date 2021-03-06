@extends('layouts.app')
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
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
					<span class="login100-form-title p-b-26">
						Don't Have an Account?
					</span>
                    <!--Name-->
					<div class="wrap-input100 validate-input">
						<input class="input100" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						@error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <span class="focus-input100" data-placeholder="Name"></span>
					</div>
                    <!--Email-->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						@error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <span class="focus-input100" data-placeholder="Email"></span>
					</div>
                    <!--Address-->
                    <div class="wrap-input100 validate-input">
						<input class="input100" id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
						@error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <span class="focus-input100" data-placeholder="Address"></span>
					</div>
                    <!--Phone Number-->
                    <div class="wrap-input100 validate-input">
						<input class="input100" id="phoneNumber" type="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>
						@error('phoneNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <span class="focus-input100" data-placeholder="Phone Number"></span>
					</div>
                    <!--Password-->
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
                    <!--Confirm Password-->
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>
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
</body>
@endsection
