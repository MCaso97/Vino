<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script type="importmap">
        {
            "imports": {
                "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
            }
        }
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') . " - " . Route::currentRouteName() }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="nav_menu">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="bi bi-droplet-fill"></i>
                    {{ config('app.name', 'Laravel') }}
                </a>
            
                @auth
                    <li class="nav_menu d-none d-sm-flex">
                        <ul><a href="{{ url('/home') }}" class="nav-link {{ request()->is('home') ? 'active disabled' : '' }}">Home</a></ul>
                        <ul><a href="{{ url('/events') }}" class="nav-link {{ request()->is('events') ? 'active disabled' : '' }}">Events</a></ul>
                        <ul><a href="{{ url('/wines') }}" class="nav-link {{ request()->is('wines') ? 'active disabled' : '' }}">Wines</a></ul>
                        @if (Auth::user()->isWinery() || Auth::user()->isSupplier())
                            <ul><a href="{{ url('/events/create') }}" class="primary_button">New event</a></ul>
                        @endif
                        @if (Auth::user()->isWinery())
                            <ul><a href="{{ url('/wines/create') }}" class="primary_button" style="margin-left: 0px;">New wine</a></ul>
                        @endif
                    </li>

                    <div id="profile_search">
                        <i class="bi bi-search"></i>
                        <i class="bi bi-people-fill"></i>
                        <i class="bi bi-bell-fill"></i>
                        <div class="dropdown">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./profile_placeholder.jpg" alt="profile pic" />
                            </a>
                          
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Edit profile</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); 
                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                @endauth

                @guest
                    <div id="nav_login">
                        <li>
                            <ul>
                                <a class="nav-link {{ request()->is('login') ? 'active disabled' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </ul>
                            <ul>
                                <a class="nav-link {{ request()->is('register') ? 'active disabled' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </ul>
                        </li>
                    </div>
                @endguest
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        @auth
            <footer class="d-sm-none" id="footer_menu">
                <li class="nav_menu">
                    <ul>
                        <a href="{{ url('/home') }}" class="{{ request()->is('home') ? 'active' : '' }}">
                            <i class="bi bi-house-fill"></i>
                        </a>
                    </ul>
                    <ul>
                        <a href="{{ url('/events') }}" class="{{ request()->is('events') ? 'active' : '' }}">
                            <i class="bi bi-calendar-event-fill"></i>
                        </a>
                    </ul>
                    <ul>
                        <a href="{{ url('/wines') }}" class="{{ request()->is('wines') ? 'active' : '' }}">
                            <i class="bi bi-droplet-fill"></i>
                        </a>
                    </ul>
                </li> 
            </footer>
        @endauth
    </div>
</body>
</html>
