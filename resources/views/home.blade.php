@extends('layouts.app')

@section('content')
    <div class="   bg-dark text-white font-sans">

        <!-- Hero Section -->
        <div
            class=" position-relative d-flex flex-column justify-content-center align-items-center text-center  py-5 min-vh-100">

            <div class="position-absolute top-0 start-0 w-100 h-100 "
                style="background-image: url('{{ asset('images/hero-bg.jpeg') }}'); background-size: cover; background-position:
                                center; filter: brightness(70%);">
            </div>

            <div class="position-relative z-2 text-center container">
                <h1 class="display-2 fw-bold mb-3">Interior Design And Furniture</h1>
                <p class="lead text-light display-7 mb-4">
                    Turn your room with us into a lot more minimalist anxd</p>
                <p class="lead text-light display-7 mb-4"> modern with ease and speed
                </p>

                <a href="{{ route('register') }}"  class="btn btn-warning text-white fw-semibold px-5 py-3 shadow-lg">
                    Sign up
                </a>

                <p class="mt-3 small text-light">
                    Already have an account?
                    <a href="{{ route('login') }}" wire:click.prevent="login" class="text-warning fw-bold">Log in</a>
                </p>
            </div>
        </div>

        <!-- Why Choosing Us -->
        <div class="container-fluid bg-white text-dark py-5">
            <div class="row g-4 px-4">
                <div class="col-md-4">
                    <h2 class="fw-bold display-3">Why Choosing Us</h2>
                </div>

                <div class="col-md-4 border-start ps-4">
                    <h3 class="h5 fw-semibold mb-2">Easy to find furniture</h3>
                    <p class="text-muted small">
                        The advantage of website is that gives you comfortable service and all-around facilities to find the
                        furniture you want
                    </p>
                    <a href="#" class="text-warning fw-medium small">More Info →</a>
                </div>

                <div class="col-md-4 border-start ps-4">
                    <h3 class="h5 fw-semibold mb-2">AI Help Feature</h3>
                    <p class="text-muted small">
                        You can get a full design of the highest quality at an affordable price and still enjoy the
                        facilities that are only here.
                    </p>
                    <a href="#" class="text-warning fw-medium small">More Info →</a>
                </div>
            </div>
        </div>

    </div>
@endsection
