@extends('layouts.app')

@section('content')
<div class="container my-5">

    <!-- Page Title -->
    <div class="row text-center mb-5">
        <div class="col">
            <h1 class="fw-bold">Contact Us</h1>
            <p class="text-muted">We’d love to hear from you. Reach out anytime!</p>
        </div>
    </div>

    <div class="row">
        <!-- Contact Info -->
        <div class="col-md-6 mb-4">
            <h4 class="fw-bold">Get in Touch</h4>
            <p><i class="bi bi-geo-alt-fill text-primary"></i> Riyadh, Saudi Arabia</p>
            <p><i class="bi bi-envelope-fill text-primary"></i> support@furnishai.com</p>
            <p><i class="bi bi-telephone-fill text-primary"></i> +966 500 000 000</p>

            <h5 class="fw-bold mt-4">Follow Us</h5>
            <a href="#" class="me-3 text-decoration-none text-dark"><i class="bi bi-facebook fs-4"></i></a>
            <a href="#" class="me-3 text-decoration-none text-dark"><i class="bi bi-twitter fs-4"></i></a>
            <a href="#" class="text-decoration-none text-dark"><i class="bi bi-instagram fs-4"></i></a>
        </div>

        <!-- Contact Form -->
        <div class="col-md-6">
            <form class="card shadow-sm border-0 p-4">
                <div class="mb-3">
                    <label class="form-label">Your Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter your email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea rows="4" class="form-control" placeholder="Write your message"></textarea>
                </div>

                <button type="submit" class="btn btn-primary px-4">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
