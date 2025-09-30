@extends('layouts.app')

@section('content')
    {{-- ASSUMING: You have moved the custom styles into a separate file and linked it here
         or in your master layout (layouts/app.blade.php). --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div class="register-container">
        <div class="design-card">
            {{-- Left Column: Image (Matching the previous design) --}}
            <div class="image-col">
                {{-- Set the image via background-image in the custom CSS file --}}
            </div>

            {{-- Right Column: Login Form --}}
            <div class="form-col">
                <h2 class="mb-5 text-center">Welcome Back!</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email Field --}}
                    <div class="mb-4">
                        <label for="email" class="form-label-simple">{{ __('Email Address') }}</label>
                        <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror custom-input" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter your Email here">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- Password Field --}}
                    <div class="mb-4">
                        <label for="password" class="form-label-simple">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror custom-input" name="password"
                            required autocomplete="current-password"
                            placeholder="Enter your Password here">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- Remember Me & Forgot Password (Adjusted Layout) --}}
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        {{-- Remember Me Checkbox --}}
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        {{-- Forgot Password Link --}}
                        @if (Route::has('password.request'))
                            <a class="text-link small" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    {{-- Login Button --}}
                    <div class="mb-3">
                        <button type="submit" class="btn custom-btn">
                            {{ __('Login') }}
                        </button>
                    </div>

                    {{-- Register Link --}}
                    @if (Route::has('register'))
                        <p class="text-center mt-3">
                            Don't have an account? <a href="{{ route('register') }}" class="text-link">Register</a>
                        </p>
                    @endif

                </form>
            </div>
        </div>
    </div>
@endsection
