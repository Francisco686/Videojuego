<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende Jugando - Matemáticas para Niños</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('tesvb.png') }}?v={{ time() }}" type="image/png">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f0f8ff; 
            color: #333;
        }

        .navbar {
            background-color: #FF6347; 
            padding: 15px;
        }
        
        .navbar-brand {
            font-size: 2rem;
            color: white;
            font-weight: bold;
        }
        
        .navbar-brand:hover {
            color: yellow;
        }

        .login-btn {
            font-size: 1rem;
            color: white;
            background-color: #32CD32;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
        }

        .login-btn:hover {
            background-color: #228B22;
        }

        .carousel-inner {
            border-radius: 10px;
        }

        .carousel-item {
            background-color: #FFD700; 
            color: #333;
            padding: 80px 20px;
            text-align: center;
        }

        .carousel-item h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }

        .carousel-item p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #32CD32; 
            border-color: #32CD32;
            font-size: 1.2rem;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #228B22; 
            border-color: #228B22;
        }

        .footer {
            background-color: #FF6347;
            padding: 20px;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <a class="navbar-brand" href="#">Aprende Jugando</a>
        <div class="ml-auto">
            @guest
                <a href="{{ route('login') }}" class="login-btn">Iniciar Sesión</a>
            @else
                <a href="{{ route('logout') }}" class="login-btn"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>
    </nav>

    <!-- Carrusel de Bienvenida -->
    <div id="welcomeCarousel" class="carousel slide" data-ride="carousel" data-interval="2300">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2300">
                <h1>¡Bienvenidos a Aprende Jugando!</h1>
                <p>Diviértete aprendiendo matemáticas básicas con nuestros juegos interactivos.</p>
                <a class="btn btn-primary" href="#games-section">Ver Juegos</a>
            </div>
            <div class="carousel-item" data-interval="2300">
                <h1>¡Aprende y Juega!</h1>
                <p>Disfruta de desafíos matemáticos que te harán pensar y divertirte.</p>
                <a class="btn btn-primary" href="#games-section">Juega Ahora</a>
            </div>
            <div class="carousel-item" data-interval="2300">
                <h1>¡Explora Nuevos Retos!</h1>
                <p>Con cada juego, descubre nuevos retos y mejora tus habilidades matemáticas.</p>
                <a class="btn btn-primary" href="#games-section">Explorar</a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#welcomeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#welcomeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Sección de juegos -->
    <div class="container" id="games-section">
        <h2 class="text-center">Nuestros Juegos</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="game-card">
                    <img src="{{ asset('img/juego-matematicas.png') }}" alt="Juego de Suma" class="card-img-top">
                    <h3>¡Suma y Gana!</h3>
                    <p>¡Practica sumas básicas de forma divertida!</p>
                    <a href="{{ route('juego.suma') }}" class="btn btn-primary">Jugar</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="game-card">
                    <img src="{{ asset('img/resta.png') }}" alt="Juego de Resta" class="card-img-top">
                    <h3>¡Resta y Descubre!</h3>
                    <p>Resta números de una manera entretenida.</p>
                    <a href="{{ route('juego.resta') }}" class="btn btn-primary">Jugar</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="game-card">
                    <img src="{{ asset('img/multiplicacion.png') }}" alt="Juego de Multiplicación" class="card-img-top">
                    <h3>¡Multiplica y Aprende!</h3>
                    <p>Aprende las tablas de multiplicar con desafíos.</p>
                    <a href="{{ route('juego.multiplicacion') }}" class="btn btn-primary">Jugar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Aprende Jugando. Todos los derechos reservados.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
