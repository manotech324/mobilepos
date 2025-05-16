<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 May 2025 05:46:39 GMT -->
<head>

		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Dreams POS is a powerful Bootstrap based Inventory Management Admin Template designed for businesses, offering seamless invoicing, project tracking, and estimates.">
		<meta name="keywords" content="inventory management, admin dashboard, bootstrap template, invoicing, estimates, business management, responsive admin, POS system">
		<meta name="author" content="Dreams Technologies">
		<meta name="robots" content="index, follow">
		<title>Dreams POS - Inventory Management & Admin Dashboard Template</title>
        
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Apple Touch Icon -->
		<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
        <!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <!-- Tabler Icon CSS -->
	    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.css">
		

	    <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
    </head>
    <body class="account-page">

       
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="login-wrapper register-wrap bg-img">
                    <div class="login-content authent-content">
                        
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="login-userset text-center">
                                <div class="login-logo logo-normal">
                                    <img src="{{ asset('assets/img/logo.svg') }}" alt="DreamsPOS Logo">
                                </div>
                                <a href="{{ url('/') }}" class="login-logo logo-white">
                                    <img src="{{ asset('assets/img/logo-white.svg') }}" alt="DreamsPOS Logo">
                                </a>
                                <div class="login-userheading">
                                    <h3>Register</h3>
                                    <h4>Create New DreamsPOS Account</h4>
                                </div>

                                <!-- Name Field -->
                                <div class="mb-3">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" name="name" class="form-control border-end-0 @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                        <span class="input-group-text border-start-0">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email Field -->
                                <div class="mb-3">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control border-end-0 @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                        <span class="input-group-text border-start-0">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password Field -->
                                <div class="mb-3">
                                    <label class="form-label">Password <span class="text-danger">*</span></label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="pass-input form-control @error('password') is-invalid @enderror" required>
                                        <span class="fas fa-eye-off toggle-password text-gray-9"></span>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                    <div class="pass-group">
                                        <input type="password" name="password_confirmation" class="pass-input form-control @error('password_confirmation') is-invalid @enderror" required>
                                        <span class="fas fa-eye-off toggle-password text-gray-9"></span>
                                    </div>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="form-login">
                                    <button type="submit" class="btn btn-primary w-100">Create Account</button>
                                </div>

                                <!-- Login Link -->
                                <div class="text-center mt-3">
                                    <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-orange">Sign In</a></p>
                                </div>

                                <!-- Terms Checkbox -->
                                <div class="form-login authentication-check">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="custom-control custom-checkbox justify-content-start">
                                                <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                    <input type="checkbox" name="terms" value="1" @if(old('terms')) checked @endif>
                                                    <span class="checkmarks"></span>
                                                    I agree to the <a href="#" class="text-primary">Terms & Privacy</a>
                                                </label>
                                            </div>
                                            @error('terms')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-login">
                                    <button type="submit" class="btn btn-login">Sign Up</button>
                                </div>

                                <!-- Sign In Link -->
                                <div class="signinform">
                                    <h4>Already have an account? <a href="{{ route('login') }}" class="hover-a">Sign In Instead</a></h4>
                                </div>

                                <!-- Social Login -->
                                {{-- <div class="form-setlogin or-text">
                                    <h4>OR</h4>
                                </div>
                                <div class="mt-2">
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <div class="text-center me-2 flex-fill">
                                            <a href="javascript:void(0);" class="br-10 p-2 btn btn-info d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1" src="{{ asset('assets/img/icons/facebook-logo.svg') }}" alt="Facebook">
                                            </a>
                                        </div>
                                        <div class="text-center me-2 flex-fill">
                                            <a href="javascript:void(0);" class="btn btn-white br-10 p-2 border d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1" src="{{ asset('assets/img/icons/google-logo.svg') }}" alt="Google">
                                            </a>
                                        </div>
                                        <div class="text-center flex-fill">
                                            <a href="javascript:void(0);" class="bg-dark br-10 p-2 btn btn-dark d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1" src="{{ asset('assets/img/icons/apple-logo.svg') }}" alt="Apple">
                                            </a>
                                        </div>
                                    </div>
                                </div> --}}

                                <!-- Copyright -->
                                <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                    <p>Copyright © 2025 DreamsPOS</p>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                </div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.7.1.min.js" type="a87c32fb101414464653983e-text/javascript"></script>

         <!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js" type="a87c32fb101414464653983e-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js" type="a87c32fb101414464653983e-text/javascript"></script>
		
		<!-- Custom JS -->
<script src="assets/js/script.js" type="a87c32fb101414464653983e-text/javascript"></script>

	
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="a87c32fb101414464653983e-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"93f7851a8c0e9075","version":"2025.4.0-1-g37f21b1","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 May 2025 05:46:39 GMT -->
</html>