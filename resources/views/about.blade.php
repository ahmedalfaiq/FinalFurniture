@extends('layouts.app')

@section('content')
    <div class="container my-5">

        <!-- Hero Section -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 text-center text-md-start">
                <h1 class="display-4 fw-bold">About Us</h1>
                <p class="lead text-muted">
                    We are revolutionizing furniture and interior design with the power of Artificial Intelligence.
                    Our mission is to provide smart, sustainable, and personalized design solutions that save time,
                    reduce costs, and transform spaces beautifully.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/about-bg.jpg') }}" class="img-fluid rounded shadow" alt="About Us">
            </div>
        </div>

        <!-- Mission & Vision Section -->
        <div class="row text-center mb-5">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <i class="bi bi-lightbulb display-5 text-primary"></i>
                        <h5 class="mt-3">Our Mission</h5>
                        <p class="text-muted">
                            To simplify interior design by offering AI-powered recommendations,
                            AR previews, and real-time access to trusted furniture suppliers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <i class="bi bi-eye display-5 text-success"></i>
                        <h5 class="mt-3">Our Vision</h5>
                        <p class="text-muted">
                            To become the leading AI-driven platform for sustainable interior design,
                            bridging technology, creativity, and eco-friendly practices.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <i class="bi bi-people display-5 text-warning"></i>
                        <h5 class="mt-3">Our Values</h5>
                        <p class="text-muted">
                            Innovation, Sustainability, Personalization, and Customer Experience are
                            at the core of everything we build.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{ asset('images/ai-bg.jpg') }}" class="img-fluid rounded shadow" alt="AI Design">
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <h2 class="fw-bold">Why Choose Us?</h2>
                <ul class="list-unstyled mt-3">
                    <li><i class="bi bi-check-circle text-success"></i> AI-powered design suggestions tailored to your space
                    </li>
                    <li><i class="bi bi-check-circle text-success"></i> 3D & AR previews for real-time visualization</li>
                    <li><i class="bi bi-check-circle text-success"></i> Direct integration with trusted furniture vendors
                    </li>
                    <li><i class="bi bi-check-circle text-success"></i> Eco-friendly and sustainable design recommendations
                    </li>
                    <li><i class="bi bi-check-circle text-success"></i> Secure platform with smooth shopping experience</li>
                </ul>
            </div>
        </div>

        <!-- Team Section -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">Meet Our Team</h2>
            <p class="text-muted">A passionate group of designers, engineers, and innovators.</p>
        </div>
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="{{ asset('images/team1.jpg') }}" class="card-img-top rounded" alt="Team Member">
                    <div class="card-body">
                        <h6 class="fw-bold mb-0">Ali Ahmed</h6>
                        <small class="text-muted">Project Manager</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="{{ asset('images/team2.jpg') }}" class="card-img-top rounded" alt="Team Member">
                    <div class="card-body">
                        <h6 class="fw-bold mb-0">Sara Mohamed</h6>
                        <small class="text-muted">AI Engineer</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="{{ asset('images/team3.jpg') }}" class="card-img-top rounded" alt="Team Member">
                    <div class="card-body">
                        <h6 class="fw-bold mb-0">Omar Khalid</h6>
                        <small class="text-muted">UI/UX Designer</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="{{ asset('images/team4.jpg') }}" class="card-img-top rounded" alt="Team Member">
                    <div class="card-body">
                        <h6 class="fw-bold mb-0">Nour Fatima</h6>
                        <small class="text-muted">Full-Stack Developer</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
```
