<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - Salon Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">

        <style>
            .sidebar {
                position: fixed;
                top: 56px;
                width: 250px;
                height: calc(100vh - 56px);
                /* background-color: #f8f9fa; */
                overflow-y: auto;
                border-right: 1px solid #dee2e6;
                padding-top: 1rem;
                z-index: 1030;
            }

            .nav-link {
                color: #495057;
            }

            .nav-link:hover {
                background-color: #e9ecef;
            }

            .nav-link.active {
                background-color: #dee2e6;
            }

            /* Theme selector styles */
            .theme-selector {
                cursor: pointer;
                padding: 0.5rem 1rem;
            }

            .theme-selector:hover {
                background-color: #e9ecef;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Salon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            {{-- Dashboard link if needed --}}
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <!-- Theme Selector -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="themeDropdown" role="button"
                                data-bs-toggle="dropdown">
                                <i class="fas fa-palette"></i> Theme
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="themeDropdown">
                                <li><a class="dropdown-item theme-selector" data-theme="light">Light</a></li>
                                <li><a class="dropdown-item theme-selector" data-theme="dark">Dark</a></li>
                                <li><a class="dropdown-item theme-selector" data-theme="primary">Primary</a></li>
                            </ul>
                        </li>

                        <!-- Language Selector -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                                data-bs-toggle="dropdown">
                                🌐 {{ strtoupper(app()->getLocale()) }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">English</a></li>
                                <li><a class="dropdown-item" href="{{ route('lang.switch', 'ar') }}">العربية</a></li>
                            </ul>
                        </li>

                        <!-- User Dropdown -->
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown">
                                    {{ Auth::user()->name() }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                            @csrf
                                            <a class="dropdown-item" href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('messages.logout') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('messages.register') }}</a>
                                </li>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                    href="{{ route('home') }}">
                                    <i class="fas fa-tachometer-alt me-2"></i> {{ __('messages.dashboard') }}
                                </a>
                            </li>
                            @if (Auth::user()->role == 'salon')
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('admin.salons.*') ? 'active' : '' }}"
                                        href="{{ route('admin.salons.index') }}">
                                        <i class="fas fa-store me-2"></i> {{ __('messages.salons') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}"
                                        href="{{ route('admin.services.index') }}">
                                        <i class="fas fa-concierge-bell me-2"></i> {{ __('messages.services') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('admin.employee.*') ? 'active' : '' }}"
                                        href="{{ route('admin.employee.index') }}">
                                        <i class="fas fa-users me-2"></i> {{ __('messages.employees') }}
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.appointments.*') ? 'active' : '' }}"
                                    href="{{ route('admin.appointments.index') }}">
                                    <i class="fas fa-calendar-alt me-2"></i> {{ __('messages.appointments') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.payments.*') ? 'active' : '' }}"
                                    href="{{ route('admin.payments.index') }}">
                                    <i class="fas fa-credit-card me-2"></i> {{ __('messages.payments') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.offers.*') ? 'active' : '' }}"
                                    href="{{ route('admin.offers.index') }}">
                                    <i class="fas fa-gift me-2"></i> {{ __('messages.offers') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.feedbacks.*') ? 'active' : '' }}"
                                    href="{{ route('admin.feedbacks.index') }}">
                                    <i class="fas fa-comments me-2"></i> {{ __('messages.feedback') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    <div class="container pt-6">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Theme switching functionality
            document.querySelectorAll('.theme-selector').forEach(item => {
                item.addEventListener('click', function() {
                    const theme = this.getAttribute('data-theme');
                    switchTheme(theme);
                });
            });

            function switchTheme(theme) {
                // Remove all theme classes first
                document.body.classList.remove('bg-light', 'bg-dark', 'bg-primary');
                document.querySelector('nav').classList.remove('bg-primary', 'bg-dark', 'bg-light');

                // Apply selected theme
                if (theme === 'dark') {
                    document.body.classList.add('bg-dark');
                    document.querySelector('nav').classList.add('bg-dark');
                    document.body.style.color = 'white';
                } else if (theme === 'primary') {
                    document.body.classList.add('bg-primary');
                    document.querySelector('nav').classList.add('bg-primary');
                    document.body.style.color = 'white';
                } else {
                    // Light theme (default)
                    document.body.classList.add('bg-light');
                    document.querySelector('nav').classList.add('bg-primary');
                    document.body.style.color = 'black';
                }

                // You can save the theme preference in localStorage
                localStorage.setItem('theme', theme);
            }

            // Check for saved theme preference on page load
            document.addEventListener('DOMContentLoaded', function() {
                const savedTheme = localStorage.getItem('theme') || 'light';
                switchTheme(savedTheme);
            });
        </script>
        @yield('scripts')

    </body>

</html>
