<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aprende Jugando') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('tesvb.png') }}?v={{ time() }}" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('kaiadmin-lite-1.0.0/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('kaiadmin-lite-1.0.0/assets/css/style.css') }}" rel="stylesheet">
    @yield('styles') {{-- Sección para estilos específicos de cada página --}}

    <style>
        /* Mejoras de estilo para la navbar */
        .navbar {
            background-color: #FF6347; /* Naranja atractivo */
            padding: 15px;
        }

        .navbar-brand {
            font-size: 1.8rem;
            color: #fff;
            font-weight: bold;
            text-shadow: 1px 1px 2px #333;
        }

        .navbar-brand:hover {
            color: #FFD700; /* Dorado en hover */
        }

        .nav-link {
            font-size: 1.1rem;
            color: #fff;
            transition: color 0.3s;
            margin-left: 15px;
        }

        .nav-link:hover {
            color: #FFD700; /* Color dorado en hover */
        }

        .login-btn {
            background-color: #32CD32;
            border: none;
            color: white;
            font-size: 1rem;
            padding: 5px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .login-btn:hover {
            background-color: #228B22;
            transform: scale(1.05);
        }

        .dropdown-menu {
            background-color: #FF6347;
            border: none;
        }

        .dropdown-menu .dropdown-item {
            color: #fff;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #FFD700;
            color: #333;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Aprende Jugando
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
                    </ul>
                      
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link login-btn" href="{{ route('login') }}">Iniciar Sesión</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link login-btn" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('kaiadmin-lite-1.0.0/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('kaiadmin-lite-1.0.0/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('kaiadmin-lite-1.0.0/assets/js/main.js') }}"></script>
    @yield('scripts') {{-- Sección para scripts específicos de cada página --}}
</body>
</html>
