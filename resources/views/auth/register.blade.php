@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <div class="register-container">
        <div class="design-card">
            {{-- Left Column: Image --}}
            <div class="image-col">
                {{-- The image is set via background-image in CSS --}}
            </div>

            {{-- Right Column: Form --}}
            <div class="form-col">
                <h2 class="mb-4 text-center">Create Account</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Username (or Name) Field --}}
                    <div class="mb-4">
                        <label for="name" class="form-label-simple">{{ __('Name') }}</label>
                        <input id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror custom-input" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="Enter your Name here"> {{-- Added placeholder for better design matching --}}

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- Email Field --}}
                    <div class="mb-4">
                        <label for="email" class="form-label-simple">{{ __('Email Address') }}</label>
                        <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror custom-input" name="email"
                            value="{{ old('email') }}" required autocomplete="email"
                            placeholder="Enter your Email here">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- User Role Field --}}
                    <div class="mb-4">
                        <label for="role" class="form-label-simple">{{ __('User Role') }}</label>
                        <select id="role" name="role"
                            class="form-control @error('role') is-invalid @enderror custom-input" required>
                            <option value="" disabled selected>Select your role</option>
                            <option value="supplier" {{ old('role') == 'supplier' ? 'selected' : '' }}>Supplier</option>
                            <option value="customer" {{ old('role') == 'customer' ? 'selected' : '' }}>Customer</option>
                        </select>

                        @error('role')
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
                            required autocomplete="new-password"
                            placeholder="Enter your Password here">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- Confirm Password Field --}}
                    <div class="mb-4">
                        <label for="password-confirm" class="form-label-simple">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control custom-input"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirm your Password here">
                    </div>

                    {{-- Remember Password/Login Link Area --}}
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        {{-- Simulating the "Remember Password" checkbox style from the image --}}
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember Password
                            </label>
                        </div>
                    </div>

                    {{-- Register Button --}}
                    <div class="mb-3">
                        <button type="submit" class="btn custom-btn">
                            {{ __('Create Account') }}
                        </button>
                    </div>

                    {{-- Log In Link --}}
                    <p class="text-center mt-3">
                        Already have an account? <a href="{{ route('login') }}" class="text-link">Log in</a>
                    </p>

                </form>
            </div>
        </div>
    </div>
@endsection
