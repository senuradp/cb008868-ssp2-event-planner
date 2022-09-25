<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <link type="image/x-icon" href="/assets/img/favicon.png" rel="icon">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/assets/plugins/fancybox/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/assets/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="/assets/plugins/fullcalendar/fullcalendar.min.css">

    <link rel="stylesheet" href="/assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="/assets/plugins/dropzone/dropzone.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">

    <title>@yield('title', config('app.name'))</title>

</head>

<body>
    <div id="app">
        {{-- header start --}}
        <header>

            {{-- top nav start --}}
            <div class="top-header">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 col-md-4">
                            <div class="header-top-left">
                                <ul class="nav">

                                    <li class="nav-item dropdown has-arrow flag-nav">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button">
                                            <img src="/assets/img/flags/us.png" alt="" height="20">
                                            <span>English</span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="/assets/img/flags/us.png" alt="" height="16">
                                                English
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="/assets/img/flags/fr.png" alt="" height="16">
                                                French
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="/assets/img/flags/es.png" alt="" height="16">
                                                Spanish
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="/assets/img/flags/de.png" alt="" height="16">
                                                German
                                            </a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col-12 col-md-4">
                                <h3 class="offer-text">GET OFFER UPTO <span>25%</span> ON FIRST BOOKINGS</h3>
                            </div> --}}
                        <div class="col-12 col-md-4">
                            <div class="header-top-right">
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- top nav end --}}

            {{-- navbar start --}}
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="/home" class="navbar-brand logo">
                        <img src="/assets/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="/" class="menu-logo">
                            <img src="/assets/img/logo-small.png" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="{{ Request::segment(1) == '' ? 'active' : '' }}">
                            <a href="/">Home</a>
                        </li>
                        <li class="has-submenu {{ Request::segment(2) == 'events' ? 'active' : '' }}">
                            <a href="{{ route('events') }}">Events</a>
                        </li>
                        {{-- <li class="has-submenu {{ Request::segment(3) == 'events' ? 'active' : '' }}">
                            <a href="/events">Archived Events</a>
                        </li> --}}
                        <li class="has-submenu {{ Request::segment(3) == 'events' ? 'active' : '' }}">

                            @guest
                                @if (Route::has('login'))
                                @endif

                                @if (Route::has('register'))
                                @endif
                            @else
                                <a style="color:white">
                                    Profile
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="submenu">
                                    <li class=""><a href="{{ route('user.profile.show') }}">My Profile</a></li>
                                    <li class=""><a href="{{ route('user.booking.my-bookings') }}">My Bookings</a></li>
                                    <li class=""><a href="{{ route('user.review.my-reviews') }}">My Reviews</a></li>
                                    <li class="">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>

                            @endguest
                        </li>
                        <li class="nav-item align-items-center d-flex">
                            @guest
                                {{-- <a class="nav-link header-login" href="/login">Login</a> --}}
                                @if (Route::has('login'))
                                    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                                    @auth
                                        <a href="{{ url('/home') }}" class="nav-link header-login">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="nav-link header-login mr-2">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="nav-link header-login">Register</a>
                                        @endif
                                    @endauth
                                    {{-- </div> --}}
                                @endif
                            @else
                            @endguest
                        </li>
                    </ul>
                </div>

                <ul class="main-nav">

                    @guest
                        @if (Route::has('login'))
                            <a style="color: white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" style="height:35px;">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>
                        @endif

                        @if (Route::has('register'))
                        @endif
                    @else
                        <li>
                            <a style="color:white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" style="height:35px;">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                {{ Auth::user()->name }}
                            </a>

                        </li>
                    @endguest
                </ul>
            </nav>
            {{-- navbar end --}}

        </header>
        {{-- header end --}}

        <div>
            <div class="row col-md-9 m-auto">
                <div class="col">

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                </div>
            </div>

            <div class="main-wrapper">
                {{-- content --}}
                @yield('content')
                {{-- content --}}
            </div>

            {{-- footer start --}}
            <footer class="footer">

                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">

                                <div class="footer-widget footer-about">
                                    <h2 class="footer-title">About Us</h2>
                                    <div class="footer-about-content">
                                        <p>
                                            Buttercup events is the only event & party planner you will ever need.
                                            Delivering top notch entertainment, decoration and art services is what we
                                            are best at. We always put your happiness first whether you are planning a
                                            corporate event or private party!
                                        </p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#" target="_blank"><i
                                                            class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank"><i
                                                            class="fab fa-youtube"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank"><i
                                                            class="fab fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-6">

                                <div class="footer-widget footer-menu">
                                    <h2 class="footer-title">Information</h2>
                                    <ul>
                                        <li><a href="search.html">Search for Speakers</a></li>
                                        <li><a href="events.html">Events</a></li>
                                        <li><a href="customer-dashboard.html">Customer Dashboard</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-6">

                                <div class="footer-widget footer-menu">
                                    <h2 class="footer-title">Support</h2>
                                    <ul>
                                        <li><a href="speaker-dashboard.html">Speaker Dashboard</a></li>
                                        <li><a href="booking.html">Booking</a></li>
                                        <li><a href="chat.html">Chat</a></li>
                                        <li><a href="privacy-policy.html">Privacy & Policy</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-6">

                                <div class="footer-widget footer-contact">
                                    <h2 class="footer-title">Contact Us</h2>
                                    <div class="footer-contact-info">
                                        <div class="footer-address">
                                            <span><i class="fas fa-map-marker-alt"></i></span>
                                            <p>
                                                B41/F3/3,
                                                <br>
                                                Mount Clifford Residencies,
                                                <br>
                                                Katuwana Road, Homagama
                                            </p>
                                        </div>
                                        <p>
                                            <i class="fas fa-phone-alt"></i>
                                            +94 077 977 9574
                                        </p>
                                        <p class="mb-0">
                                            <i class="fas fa-envelope"></i>
                                            {{-- <a href="https://pathivu-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="81f1e0f5e9e8f7f4c1e4f9e0ecf1ede4afe2eeec">[email&#160;protected]</a> --}}
                                            buttercupevents@gmail.com
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="footer-bottom">
                    <div class="container">

                        <div class="copyright">
                            <div class="row">
                                <div class="col-md-7 col-lg-6">
                                    <div class="copyright-text">
                                        <ul class="policy-menu text-left">
                                            <li><a href="term-condition.html">Terms and Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-6">

                                    <div class="copyright-menu">
                                        <ul class="policy-menu">
                                            <li>
                                                <p class="mb-0">&copy; {{ date('Y') }} All Rights Reserved</p>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </footer>
            {{-- footer end --}}

            {{-- scripts start --}}
            {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
            <script src="/assets/js/jquery-3.6.0.min.js"></script>

            <script src="/assets/js/bootstrap.bundle.min.js"></script>

            <script src="/assets/js/owl.carousel.min.js"></script>

            <script src="/assets/plugins/fancybox/jquery.fancybox.min.js"></script>

            <script src="/assets/js/circle-progress.min.js"></script>

            <script src="/assets/plugins/select2/js/select2.min.js"></script>

            <script src="/assets/plugins/dropzone/dropzone.min.js"></script>

            <script src="/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

            <script src="/assets/js/profile-settings.js"></script>

            <script src="/assets/js/moment.min.js"></script>
            <script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
            <script src="/assets/js/bootstrap-datetimepicker.min.js"></script>

            <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
            <script src="/assets/plugins/fullcalendar/fullcalendar.min.js"></script>
            <script src="/assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>

            <script src="/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
            <script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

            <script src="/assets/js/script.js"></script>
            {{-- scripts end --}}

</body>



</html>
