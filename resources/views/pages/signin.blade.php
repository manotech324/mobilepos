<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dreams POS is a powerful Bootstrap based Inventory Management Admin Template designed for businesses, offering seamless invoicing, project tracking, and estimates.">
    <meta name="keywords" content="inventory management, admin dashboard, bootstrap template, invoicing, estimates, business management, responsive admin, POS system">
    <meta name="author" content="Dreams Technologies">
    <meta name="robots" content="index, follow">
    <title>Mobile POS - Sign In</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="account-page">
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper bg-img">
                <div class="login-content authent-content">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="login-userset">
                            <div class="login-logo logo-normal">
                                <img src="{{ asset('assets/img/logo.svg') }}" alt="DreamsPOS Logo">
                            </div>
                            <a href="{{ url('/') }}" class="login-logo logo-white">
                                <img src="{{ asset('assets/img/logo-white.svg') }}" alt="DreamsPOS Logo">
                            </a>
                            <div class="login-userheading">
                                <h3>Sign In</h3>
                                <h4 class="fs-16">Access the Mobile POS panel using your email and passcode.</h4>
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
                                    <input type="password" name="password" class="pass-input form-control @error('password') is-invalid @enderror">
                                    <span class="fas fa-eye-off toggle-password text-gray-9"></span>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember Me and Forgot Password -->
                            <div class="form-login authentication-check">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <label class="checkboxs ps-4 mb-0 pb-0 line-height-1 fs-16 text-gray-6">
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmarks"></span>Remember me
                                            </label>
                                        </div>
                                        <div class="text-end">
                                            <a class="text-orange fs-16 fw-medium" href="{{ route('password.request') }}">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-login">
                                <button type="submit" class="btn btn-primary w-100">Sign In</button>
                            </div>

                            <!-- Register Link -->
                            <div class="signinform">
                                <h4>New on our platform? <a href="{{ route('register') }}" class="hover-a">Create an account</a></h4>
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
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Feather Icon JS -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Password Toggle Script -->
    <script>
        $(document).ready(function() {
            $('.toggle-password').click(function() {
                $(this).toggleClass('fa-eye fa-eye-off');
                var input = $(this).siblings('input');
                input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
            });
        });
    </script>
</body>
</html>