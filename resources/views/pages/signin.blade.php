<x-auth title="Login">
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
</x-auth>