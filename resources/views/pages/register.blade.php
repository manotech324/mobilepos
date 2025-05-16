<x-auth title="Register">
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
                        <h4>Create Your DreamsPOS Account</h4>
                    </div>

                    <!-- Name -->
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="password" name="password" class="pass-input form-control @error('password') is-invalid @enderror" required>
                            <span class="fas fa-eye-off toggle-password"></span>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="password" name="password_confirmation" class="pass-input form-control @error('password_confirmation') is-invalid @enderror" required>
                            <span class="fas fa-eye-off toggle-password"></span>
                        </div>
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Terms Checkbox -->
                    <div class="form-login authentication-check mb-3 text-start">
                        <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                            <input type="checkbox" name="terms" value="1" @if(old('terms')) checked @endif>
                            <span class="checkmarks"></span>
                            I agree to the <a href="#" class="text-primary">Terms & Privacy</a>
                        </label>
                        @error('terms')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <div class="form-login">
                        <button type="submit" class="btn btn-primary w-100">Create Account</button>
                    </div>

                    <!-- Already Registered -->
                    <div class="signinform mt-3">
                        <h4>Already have an account? <a href="{{ route('login') }}" class="hover-a">Sign In Instead</a></h4>
                    </div>

                    <!-- Footer -->
                    <div class="my-4 copyright-text">
                        <p class="text-center">© 2025 DreamsPOS</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-auth>