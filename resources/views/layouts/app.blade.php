<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">

    @stack('styles')

    {{-- alpine js cdn url --}}
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth('admin')
                        {{-- @can('accessAdministration') --}}
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Administration
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                        <small class="d-block ps-2">Home</small>
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                            Dashboard
                                        </a>

                                        <div class="dropdown-divider"></div>
                                        <small class="d-block ps-2">Authentication</small>
                                        <a class="dropdown-item" href="{{ route('admin.administrators.index') }}">
                                            Admins
                                        </a>
                                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                            Customers
                                        </a>

                                        <div class="dropdown-divider"></div>
                                        <small class="d-block ps-2">Content</small>
                                        <a class="dropdown-item" href="{{ route('admin.pages.index') }}">
                                            Pages
                                        </a>
                                        <a class="dropdown-item" href="{{ route('admin.categories.index') }}">
                                            Categories
                                        </a>

                                        <div class="dropdown-divider"></div>
                                        <small class="d-block ps-2">Event</small>

                                        <a class="dropdown-item" href="{{ route('admin.events.index') }}">
                                            Events
                                        </a>

                                        <div class="dropdown-divider"></div>
                                        <small class="d-block ps-2">Bookings</small>

                                        <a class="dropdown-item" href="{{ route('admin.bookings.index') }}">
                                            Bookings & Reservations
                                        </a>

                                    </div>

                                </li>
                            </ul>
                        {{-- @endcan --}}
                    @endauth

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest('admin')
                            @if (Route::has('login') || Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"></a>
                                </li>
                            @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ auth('admin')->user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- <h1>{{ resolve('ButtercupEvents')->getUrl() }}</h1> --}}

        <main class="py-4">

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

            @yield('content')
        </main>

        <div class="container bg-white">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link px-2 text-muted">Dashboard |</a></li>
                    <li class="nav-item"><a href="{{ route('admin.administrators.index') }}" class="nav-link px-2 text-muted">Admins |</a></li>
                    <li class="nav-item"><a href="{{ route('admin.users.index') }}" class="nav-link px-2 text-muted">Customers |</a></li>
                    <li class="nav-item"><a href="{{ route('admin.categories.index') }}" class="nav-link px-2 text-muted">Categories |</a></li>
                    <li class="nav-item"><a href="{{ route('admin.pages.index') }}" class="nav-link px-2 text-muted">Pages |</a></li>
                    <li class="nav-item"><a href="{{ route('admin.events.index') }}" class="nav-link px-2 text-muted">Events |</a></li>
                    <li class="nav-item"><a href="{{ route('admin.bookings.index') }}" class="nav-link px-2 text-muted">Bookings |</a></li>
                </ul>
                <p class="text-center text-muted">© {{ date('Y') }} | Buttercup Events | Senura Perera CB008868 </p>
            </footer>
        </div>

    </div>


    {{-- ckeditor text formatter --}}
    <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    @stack('scripts')

</body>
</html>
