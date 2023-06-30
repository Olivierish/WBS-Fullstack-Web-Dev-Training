<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','OI Design')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/myStyle.css" >

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-smile" style="color: #ffed4a;"></i><b> I</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('/') ? 'border-bottom border-warning border-2' : ''}}" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('about') ? 'border-bottom border-warning border-2' : '' }}" href="about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('portfolio') ? 'border-bottom border-warning border-2' : '' }}" href="portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('users*') ? 'border-bottom border-warning border-2' : '' }}" href="/users">All Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('contact') ? 'border-bottom border-warning border-2' : '' }}" href="contact">Contact</a>
                            </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                            <li class="nav-item">
                                <a class="nav-link {{Request::is('login') ? 'border-bottom border-warning border-2' : ''}}" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('register') ? 'border-bottom border-warning border-2' : ''}}" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
