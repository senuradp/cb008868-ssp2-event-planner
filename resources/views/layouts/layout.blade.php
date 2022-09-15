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
                    <a href="index-2.html" class="navbar-brand logo">
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
                        <li class="has-submenu {{ Request::segment(1) == 'events' ? 'active' : '' }}">
                            <a href="#">Events <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class=""><a href="speaker-dashboard.html">Speaker Dashboard</a></li>
                                <li class=""><a href="/events">Events</a></li>
                                <li class=""><a href="schedule-timings.html">Schedule Timing</a></li>
                                <li class=""><a href="my-customers.html">customers List</a></li>
                                <li class=""><a href="customer-profile.html">customers Profile</a></li>
                                <li class=""><a href="chat-speaker.html">Chat</a></li>
                                <li class=""><a href="invoices.html">Invoices</a></li>
                                <li class=""><a href="speaker-profile-settings.html">Profile Settings</a></li>
                                <li class=""><a href="reviews.html">Reviews</a></li>
                                <li class=""><a href="speaker-register.html">speaker Register</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu {{ Request::segment(1) == '' ? 'active' : '' }}">
                            <a href="#">Customers <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu ">
                                    <a href="#">Speakers</a>
                                    <ul class="submenu">
                                        <li class=""><a href="map-grid.html">Map Grid</a></li>
                                        <li class=""><a href="map-list.html">Map List</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="search.html">Search speaker</a></li>
                                <li class=""><a href="speaker-profile.html">speaker Profile</a></li>
                                <li class=""><a href="booking.html">Booking</a></li>
                                <li class=""><a href="checkout.html">Checkout</a></li>
                                <li class=""><a href="booking-success.html">Booking Success</a></li>
                                <li class=""><a href="customer-dashboard.html">Customer Dashboard</a></li>
                                <li class=""><a href="favourites.html">Favourites</a></li>
                                <li class=""><a href="chat.html">Chat</a></li>
                                <li class=""><a href="profile-settings.html">Profile Settings</a></li>
                                <li class=""><a href="change-password.html">Change Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu {{ Request::segment(1) == '' ? 'active' : '' }}">
                            <a href="#">pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class=""><a href="voice-call.html">Voice Call</a></li>
                                <li class=""><a href="video-call.html">Video Call</a></li>
                                <li class=""><a href="search.html">Search speakers</a></li>
                                <li class=""><a href="calendar.html">Calendar</a></li>
                                <li class=""><a href="components.html">Components</a></li>
                                <li class="has-submenu ">
                                    <a href="invoices.html">Invoices</a>
                                    <ul class="submenu">
                                        <li class=""><a href="invoices.html">Invoices</a></li>
                                        <li class=""><a href="invoice-view.html">Invoice View</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="blank-page.html">Starter Page</a></li>
                                <li class=""><a href="event-details.html">Event Details</a></li>
                                <li class=""><a href="login.html">Login</a></li>
                                <li class=""><a href="register.html">Register</a></li>
                                <li class=""><a href="forgot-password.html">Forgot Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu {{ Request::segment(1) == '' ? 'active' : '' }}">
                            <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class=""><a href="blog-list.html">Blog List</a></li>
                                <li class=""><a href="blog-grid.html">Blog Grid</a></li>
                                <li class=""><a href="blog-details.html">Blog Details</a></li>
                            </ul>
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
                                {{-- <li class="nav-item dropdown"> --}}
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a> --}}

                                {{-- <div class="nav-link" aria-labelledby="navbarDropdown"> --}}
                                {{-- <a class="nav-link header-login" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form> --}}
                                {{-- </div> --}}
                                {{-- </li> --}}
                            @endguest
                        </li>
                        {{-- <li class="login-link">
                                <a href="/login">Login / Signup</a>
                            </li> --}}
                    </ul>
                </div>

                <ul class="nav header-navbar-rht">
                    <li class="nav-item contact-item">
                        <a href="javascript:void(0);" class="header-contact-img">
                            <img src="/assets/img/mic-icon.png" alt="mic">
                        </a>
                    </li>
                </ul>

                <ul class="main-nav">

                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="has-submenu">
                            <a style="color:white">
                                {{ Auth::user()->name }}
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="submenu">
                                <li class=""><a href="#">Profile</a></li>
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
                        </li>
                    @endguest
                    {{-- <a href="javascript:void(0);" class="header-contact-detail">
                                <p class="contact-header">Your Bookings</p>
                                <p class="contact-info-header"> $300</p>
                            </a> --}}
                    {{-- </li> --}}

                </ul>
            </nav>
            {{-- navbar end --}}

        </header>
        {{-- header end --}}

        <div>

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
