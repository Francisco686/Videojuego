<<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentes Curiosas</title>
    
    <link rel="icon" href="{{ asset('tesvb.png') }}?v={{ time() }}" type="image/png">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f8ff; 
            color: #333;
        }
    </style>
</head>
<body class="text-gray-800 bg-gradient-to-br from-yellow-100 via-yellow-200 to-yellow-300 font-kid striped-bg">

  
    <nav class="bg-yellow-400 bg-opacity-90 text-white fixed top-4 left-1/2 transform -translate-x-1/2 w-11/12 md:w-5/6 lg:w-5/6 xl:w-4/5 z-50 border border-yellow-400 rounded-2xl shadow-lg">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 shadow-effect">
                <img src="{{ asset('img/log.png') }}" class="h-12 w-12 rounded-full shadow-logo" alt="Logo">
                <span class="self-center text-lg md:text-2xl font-semibold whitespace-nowrap text-white font-kid shadow-text">Mentes Curiosas</span>
            </a>
            <div class="hidden md:flex items-center space-x-6 font-kid">
                @guest
                    <a href="{{ route('login') }}" class="px-5 py-2 text-lg font-bold bg-red-700 text-white rounded-full hover:bg-red-900 transition duration-300">Iniciar Sesión</a>
                @else
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('img/usuarios/' . Auth::user()->foto) }}" class="h-12 w-12 rounded-full shadow-logo" alt="Usuario">
                        <span class="text-lg font-semibold text-white">{{ Auth::user()->name }}</span>
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="text-white">Opciones</button>
                            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg overflow-hidden">
                                <a href="#" class="block px-4 py-2 text-gray-800">{{ Auth::user()->name }}</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Cerrar Sesión</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    <div class="pt-20 max-w-screen-xl mx-auto px-4">

   
    <div class="flex flex-col items-center justify-center min-h-screen -mt-12">
        <div class="flex flex-col w-full lg:w-6/12 justify-center items-center text-center mb-5 md:mb-0">
            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-7xl sm:text-8xl md:text-9xl lg:text-[10rem] font-bold leading-tight text-red-700 font-kid blink-effect text-center float-effect">
                <span class="text-red-600">Mentes</span> <span class="text-yellow-500">Curiosas</span>
            </h1>

            <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-3xl mb-8 mt-2 text-black text-center font-kid">
                Aprender te prepara para hacer cosas asombrosas.
            </p>

            <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" class="w-full md:flex items-center justify-center md:space-x-5">
                <div class="flex items-center justify-center space-x-3 mt-5 md:mt-0 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="max-w-screen-xl mx-auto px-8 sm:px-16 mt-5">
        <div data-aos="fade-down" class="flex justify-center items-center text-center mb-6">
            <h1 class="font-semibold text-red-600 mb-4 max-w-full">
                <span class="block text-xl sm:text-8xl animate-blink">Matemáticas</span>
                <span class="block text-green-700 text-5xl sm:text-6xl mt-2 sm:mt-4">¿Para qué?</span>
            </h1>
        </div>
        <div class="sm:flex items-center sm:space-x-8 overflow-hidden">
            <div data-aos="zoom-in" class="sm:w-1/2 relative flex flex-col items-center text-center">
                <div class="flex flex-col items-center max-w-md">
                    <p class="py-7 text-justify text-2xl text-red-600">Las matemáticas son como un superpoder invisible, están en todo lo que usamos cada día, aunque no las veamos.</p>
                    <p class="py-5 text-justify text-2xl text-yellow-700">Nos ayudan a entender y a crear cosas increíbles, desde aviones, robots hasta videojuegos y las tecnologías del futuro. Sin matemáticas, nada de eso sería posible.</p>
                </div>
            </div>
            <div data-aos="zoom-in" class="relative mt-5 sm:mt-0 flex justify-center">
                <div class="rounded-full z-40 bg-gradient-to-r from-yellow-400 via-red-400 to-pink-500 p-2 shadow-lg transform transition duration-500 hover:scale-105 overflow-hidden" style="width: 350px; height: 350px;">
                    <img src="{{ asset('img/mat.png') }}" alt="Descripción de la imagen" class="w-full h-full object-cover rounded-full">
                </div>
            </div>
        </div>
    </div>

    
    <div class="container mx-auto px-4 py-12" id="games-section">
        <h2 class="text-4xl font-bold text-center mb-10">Nuestros Juegos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
         
            <div class="bg-red-100 rounded-lg shadow-lg p-6 text-center">
                <img src="{{ asset('img/juego-matematicas.png') }}" alt="Juego de Suma" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-red-700">¡Cuenta y gana!</h3>
                <p class="text-gray-700 mt-2">¡Práctica tu manera de contar!</p>
                <a href="{{ route('juego.suma') }}" class="bg-red-500 text-white font-semibold rounded-full px-6 py-2 mt-6 inline-block hover:bg-red-600">Jugar</a>
            </div>
            
         
            <div class="bg-blue-100 rounded-lg shadow-lg p-6 text-center">
                <img src="{{ asset('img/resta.png') }}" alt="Juego de Resta" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-blue-700">¡Resta y Descubre!</h3>
                <p class="text-gray-700 mt-2">Resta números de una manera entretenida.</p>
                <a href="{{ route('juego.resta') }}" class="bg-blue-500 text-white font-semibold rounded-full px-6 py-2 mt-6 inline-block hover:bg-blue-600">Jugar</a>
            </div>
            
          
            <div class="bg-yellow-100 rounded-lg shadow-lg p-6 text-center">
                <img src="{{ asset('img/multiplicacion.png') }}" alt="Juego de Multiplicación" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-yellow-700">¡Multiplica y Aprende!</h3>
                <p class="text-gray-700 mt-2">Aprende las tablas de multiplicar con desafíos.</p>
                <a href="{{ route('juego.multiplicacion') }}" class="bg-yellow-500 text-white font-semibold rounded-full px-6 py-2 mt-6 inline-block hover:bg-yellow-600">Jugar</a>
            </div>

            
            <div class="bg-purple-100 rounded-lg shadow-lg p-6 text-center">
                <img src="{{ asset('img/planetas.png') }}" alt="Ruleta de Planetas" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-purple-700">¡Ruleta de Planetas!</h3>
                <p class="text-gray-700 mt-2">Descubre curiosidades sobre los planetas.</p>
                <a href="{{ route('juego.ruleta') }}" class="bg-green-500 text-white font-semibold rounded-full px-6 py-2 mt-6 inline-block hover:bg-green-600">Jugar</a>
            </div>
        </div>
    </div>


    <footer class="bg-yellow-400 bg-opacity-90 text-gray-900 py-10 w-11/12 md:w-5/6 lg:w-5/6 xl:w-4/5 mx-auto mb-4 border border-yellow-400 rounded-2xl shadow-lg">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col items-center space-y-6">
                <h2 class="text-3xl font-bold tracking-wide text-center">Mentes Curiosas</h2>
                <div class="flex space-x-6">
                    <a href="#" class="p-3 bg-white bg-opacity-10 rounded-full hover:bg-opacity-20"><img src="https://img.icons8.com/fluent/36/ffffff/facebook-new.png"></a>
                    <a href="#" class="p-3 bg-white bg-opacity-10 rounded-full hover:bg-opacity-20"><img src="https://img.icons8.com/fluent/36/ffffff/linkedin-2.png"></a>
                    <a href="#" class="p-3 bg-white bg-opacity-10 rounded-full hover:bg-opacity-20"><img src="https://img.icons8.com/fluent/36/ffffff/instagram-new.png"></a>
                    <a href="#" class="p-3 bg-white bg-opacity-10 rounded-full hover:bg-opacity-20"><img src="https://img.icons8.com/fluent/36/ffffff/twitter.png"></a>
                </div>
            </div>
            <div class="mt-8 border-t border-black border-opacity-10"></div>
            <div class="flex flex-col md:flex-row justify-between items-center mt-8 text-center text-sm">
                <p class="font-light text-gray-900">&copy; 2024 Mentes Curiosas. Todos los derechos reservados.</p>
                <div class="mt-4 md:mt-0 flex space-x-6">
                    <a href="#" class="text-gray-900 hover:text-white transition duration-300">Política de privacidad</a>
                    <a href="#" class="text-gray-900 hover:text-white transition duration-300">Términos de servicio</a>
                    <a href="#" class="text-gray-900 hover:text-white transition duration-300">Contacto</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
