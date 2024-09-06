<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Changarro - Tienda de Abarrotes</title>
    <link rel="icon" href="../assets/img/kaiadmin/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { families: ["Montserrat:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["../assets/css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/plugins.min.css">
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css">
    <link rel="stylesheet" href="../assets/css/demo.css">

    <style>
        /* Custom styles */
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f0f0f0;
        }
        .sidebar {
            background-color: #007bff; /* Fondo azul para la barra lateral */
            color: #fff;
        }
        .sidebar-logo {
            padding: 15px 20px;
            text-align: center;
        }
        .sidebar-logo a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .sidebar-logo img {
            height: 90px; /* Hacer el logo más grande */
        }
        .sidebar-content {
            padding: 20px;
        }
        /* Ajustes para los enlaces de la barra lateral */
.nav-secondary .nav-link {
    color: #ccc;
    transition: color 0.3s, transform 0.3s;
    font-size: 1.1rem;
    display: flex;
    align-items: center; /* Para centrar verticalmente el texto y el icono */
}

/* Ajustes para los iconos de la barra lateral */
.nav-secondary .nav-link i {
    color: #ffcc00; /* Color amarillo para los iconos */
    font-size: 2.5rem; /* Tamaño de los iconos */
    margin-right: 10px; /* Espacio entre el icono y el texto */
    transition: color 0.3s, transform 0.3s;
}

/* Efecto hover para los enlaces y los iconos */
.nav-secondary .nav-link:hover {
    color: #fff;
    transform: scale(1.1);
}

.nav-secondary .nav-link:hover i {
    color: #fff;
    transform: scale(1.1);
}

       
        
        .jumbotron {
            background-color: #007bff; /* Fondo azul para el jumbotron */
            color: #fff;
            padding: 100px 20px;
            text-align: center;
            margin-bottom: 30px;
        }
        .jumbotron h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .jumbotron p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        .jumbotron .btn-primary {
            background-color: #0056b3;
            border-color: #0056b3;
            font-size: 1.2rem;
            padding: 10px 20px;
        }
        .jumbotron .btn-primary:hover {
            background-color: #00408a;
            border-color: #00408a;
        }
        .row {
            margin-bottom: 30px;
        }
        .col-lg-4 {
            text-align: center;
            padding: 0 15px;
        }
        .col-lg-4 h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #007bff;
        }
        .col-lg-4 ul {
            list-style-type: none;
            padding: 0;
        }
        .col-lg-4 ul li {
            margin-bottom: 10px;
        }
        .col-lg-4 blockquote {
            font-style: italic;
            border-left: 5px solid #007bff;
            padding-left: 10px;
            margin-top: 20px;
            color: #555;
        }
        .cart {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            display: flex;
            align-items: center;
        }
        .cart a {
            color: #ffcc00; /* Color amarillo para el icono del carrito */
            text-decoration: none;
            font-size: 1.8rem;
        }
        .cart .btn-primary {
            font-size: 1rem; /* Hacer el botón de registro más pequeño */
            padding: 5px 10px;
        }
        .cart-content {
            position: fixed;
            top: 0;
            right: 0;
            width: 300px;
            height: 100%;
            background-color: #fff;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
            padding: 20px;
        }
        .cart-content.open {
            transform: translateX(0);
        }
        .cart-close {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }
        .cart-item {
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .cart-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .cart-item-title {
            font-weight: bold;
            color: #333;
        }
        .link-productos {
            text-align: center;
            margin-bottom: 30px;
        }
        .cart-item-image {
            max-width: 80px; /* Ajusta el tamaño máximo de la imagen */
            height: auto; /* Mantiene la proporción de la imagen */
        }
        .highlight {
            background-color: yellow;
            padding: 0.2em;
            border-radius: 3px;
        }
        /* Estilos más llamativos para los enlaces de la barra lateral */
        .nav-secondary {
    background-color: #007bff; /* Azul vibrante de fondo */
}

.nav-secondary .nav-link {
    color: #fff; /* Color de texto blanco */
    transition: color 0.3s, transform 0.3s;
    font-size: 1.1rem;
    display: flex;
    align-items: center; /* Para centrar verticalmente el texto y el icono */
}

.nav-secondary {
    background-color: #007bff; /* Azul vibrante de fondo */
    padding: 10px; /* Opcional: espacio alrededor del menú */
}

.nav-secondary .nav-link {
    color: #007bff; /* Color de texto azul para contrastar con el fondo blanco */
    background-color: #fff; /* Fondo blanco para los enlaces */
    transition: transform 0.3s, color 0.3s;
    font-size: 1.1rem;
    display: flex;
    align-items: center; /* Para centrar verticalmente el texto y el icono */
    margin: 5px 0; /* Espaciado entre los enlaces */
    padding: 10px; /* Espaciado interno de los enlaces */
    border-radius: 5px; /* Bordes redondeados para los enlaces */
    text-decoration: none; /* Quitar subrayado de los enlaces */
}

/* Establecer colores para cada enlace */
.nav-secondary .nav-link[href="{{ route('home.index') }}"],
.nav-secondary .nav-link[href="{{ route('productos.index') }}"],
.nav-secondary .nav-link[href="{{ route('ventas.index') }}"],
.nav-secondary .nav-link[href="{{ route('provedors.index') }}"],
.nav-secondary .nav-link[href="{{ route('empleados.index') }}"],
.nav-secondary .nav-link[href="{{ route('entradas.create') }}"],
.nav-secondary .nav-link[href="{{ route('tickets.create') }}"],
.nav-secondary .nav-link[href="{{ route('telefonos.create') }}"],
.nav-secondary .nav-link[href="{{ route('venta_mayoreo.create') }}"] {
    color: #007bff; /* Color de texto azul */
}

/* Efecto de hover para mantener el fondo blanco */
.nav-secondary .nav-link:hover {
    color: #0056b3; /* Color de texto ligeramente más oscuro en hover */
    transform: scale(1.05); /* Pequeño aumento de escala */
}




/* Efecto hover para los enlaces */
.nav-secondary .nav-link:hover {
    color: #fff; /* Color al hacer hover */
    transform: scale(1.1);
}
.carousel-item {
    height: 400px;
}

.carousel-item img {
    height: 100%;
    object-fit: cover;
}
.carousel-item img {
    width: 80%; /* Ajusta el tamaño al 80% del contenedor */
    height: auto; /* Mantiene la proporción de la imagen */
    margin: 0 auto; /* Centra la imagen horizontalmente */
}
.carousel-caption .btn {
    margin-top: 10px;
}
.carousel-image {
    max-width: 80%;
    height: auto;
    margin: 0 auto;
    border-radius: 15px; /* Bordes redondeados */
    object-fit: cover; /* Ajustar la imagen */
}

.carousel-caption h5 {
    font-size: 1.5rem;
}

.carousel-caption p {
    font-size: 1rem;
}
.carousel-title {
    font-size: 2rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.carousel-text {
    font-size: 1.25rem;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}
.caption-background {
    background-color: rgba(0, 0, 0, 0.5); /* Fondo negro semitransparente */
    padding: 10px;
    border-radius: 5px;
}

.carousel-title {
    font-size: 2rem;
    font-weight: bold;
    color: #fff;
}

.carousel-text {
    font-size: 1.25rem;
    color: #fff;
}
.caption-custom {
    transform: translateY(50%); /* Ajusta este valor según sea necesario */
}
.caption-background {
    background-color: rgba(0, 0, 0, 0.5); /* Fondo negro semitransparente */
    padding: 10px;
    border-radius: 5px;
    position: absolute;
    bottom: 20px; /* Ajusta la distancia desde abajo según sea necesario */
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
}

.carousel-title {
    font-size: 2rem;
    font-weight: bold;
    color: #fff;
}

.carousel-text {
    font-size: 1.25rem;
    color: #fff;
}

.btn-comprar {
    margin-top: 10px; /* Espacio entre el texto y el botón */
}
.contact-form-container {
    width: 100%;
    max-width: 995px; /* Ajuste el máximo ancho según sea necesario */
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.contact-form {
    width: 100%;
}

.contact-form h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

.contact-form .form-group {
    margin-bottom: 15px;
}

.contact-form label {
    font-weight: bold;
    color: #555;
}

.contact-form .form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.contact-form textarea.form-control {
    resize: vertical;
}

.contact-form button[type="submit"] {
    width: 100%;
    padding: 12px 20px;
    font-size: 16px;
    background-color: #007bff;
    border: none;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
}

.contact-form button[type="submit"]:hover {
    background-color: #0056b3;
}









    </style>

    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-logo">
                <a href="../index.html" class="logo">
<img src="../assets/img/changarro.jpg" alt="El Changarro Logo" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; height: 80px;">
                </a>
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                <ul class="nav nav-secondary">
        <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}"><i class="fas fa-home"></i> Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}"><i class="fas fa-box"></i> Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('ventas.index') }}"><i class="fas fa-shopping-cart"></i> Ventas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('provedors.index') }}"><i class="fas fa-truck"></i> Proveedores</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('empleados.index') }}"><i class="fas fa-users"></i> Empleados</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('entradas.create') }}"><i class="fas fa-sign-in-alt"></i> Entradas</a></li>
       
        <li class="nav-item"><a class="nav-link" href="{{ route('telefonos.create') }}"><i class="fas fa-phone"></i> Teléfonos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('venta_mayoreo.create') }}"><i class="fas fa-tags"></i> Ventas al por Mayor</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('personas.index') }}"><i class="fas fa-users"></i> Personas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('fechas.index') }}"><i class="far fa-calendar-alt"></i> Fechas</a></li>

    </ul>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-panel">
            <main class="main-content">
                <div class="container-fluid">
                    <!-- Cart -->
                    <div class="cart" id="cart">
                        <a href="{{ url('/register') }}" class="btn btn-primary btn-lg">Regístrate Ahora</a>
                        <a href="#" id="cart-toggle">
                            <i class="fas fa-shopping-cart" style="color: #ffcc00;"></i> <!-- Icono del carrito en color amarillo -->
                            <span id="cart-count">0</span>
                        </a>
                    </div>
                     
                    
                    <!-- Cart Content -->
                    <div class="cart-content" id="cart-content">
                        <div class="cart-close" id="cart-close">
                            <i class="fas fa-times"></i>
                        </div>
                        <h3>Carrito de Compras</h3>
                        <div id="cart-items"></div>
                    </div>

                    <!-- Dashboard -->
                    <div class="jumbotron">
                        <h1 class="display-4">¡Bienvenido a "El Changarro"!</h1>
                        <p class="lead">Tu tienda favorita de bebidas y alimentos.</p>
                        <hr class="my-4">
                        <p>Somos expertos en ofrecerte productos abarroteros de la más alta calidad.</p>
                    </div>
                    <!--Carrusel-->
<!--Carrusel-->
<div id="productCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#productCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#productCarousel" data-slide-to="1"></li>
        <li data-target="#productCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/principal.png') }}" class="d-block carousel-image" alt="First slide">
            <div class="carousel-caption d-none d-md-block caption-background caption-custom">
                <h5 class="carousel-title">Cereales Nestlé</h5>
                <p class="carousel-text">Compra el primero y lleva el segundo con 70% de descuento</p>
                <a href="{{ url('/productos') }}" class="btn btn-primary btn-comprar">Comprar Ahora</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/principal2.png') }}" class="d-block carousel-image" alt="Second slide">
            <div class="carousel-caption d-none d-md-block caption-background caption-custom">
                <h5 class="carousel-title">Lacteos</h5>
                <p class="carousel-text">Aprovecha y ahorra más con nuestros descuentos</p>
                <a href="{{ url('/productos') }}" class="btn btn-primary btn-comprar">Comprar Ahora</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/principal3.png') }}" class="d-block carousel-image" alt="Third slide">
            <div class="carousel-caption d-none d-md-block caption-background caption-custom">
                <h5 class="carousel-title">Cerveza Modelo</h5>
                <p class="carousel-text">Compruébalo en el total de tu ticket</p>
                <a href="{{ url('/productos') }}" class="btn btn-primary btn-comprar">Comprar Ahora</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>




                   
                   

                   
                    <!-- Products -->
                    <h2>Productos</h2>
                    <div class="row">
                        @forelse($productos as $producto)
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    @if ($producto->imagen)
                                        <img src="{{ asset('storage/' . str_replace('public/', '', $producto->imagen)) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                                    @else
                                        <img src="{{ asset('storage/default.jpg') }}" class="card-img-top" alt="Imagen por defecto">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                                        <p class="card-text">{{ $producto->descripcion }}</p>
                                        <p class="card-text"><strong>Precio:</strong> ${{ $producto->precio }}</p>
                                        <button class="btn btn-primary add-to-cart" data-id="{{ $producto->id }}">Añadir al carrito</button>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No hay productos disponibles.</p>
                        @endforelse
                    </div>
                     <!-- About, Services, Testimonials -->
                     <div class="row">
                        <div class="col-lg-4">
                            <h2>Sobre Nosotros</h2>
                            <p>Somos una empresa apasionada por brindar la mejor atención y calidad en nuestros productos.</p>
                        </div>
                        <div class="col-lg-4">
                            <h2>Servicios</h2>
                            <ul>
                                <li>Productos frescos y de calidad.</li>
                                <li>Atención al cliente excepcional.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h2>Testimonios</h2>
                            <blockquote>
                                <p>"Siempre me sorprende la dedicación y variedad de productos que ofrecen."</p>
                                <cite>Cliente Satisfecho</cite>
                            </blockquote>
                        </div>
                    </div>

                  <!-- Contact Form -->
<div class="contact-form-container">
    <h2>Contacto</h2>
    <form action="{{ url('/contact') }}" method="post" class="contact-form">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Mensaje:</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/kaiadmin.min.js"></script>
    <script src="../assets/js/demo.js"></script>
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>
    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/world.js"></script>
    <script src="../assets/js/plugin/gmaps/gmaps.js"></script>
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/js/kaiadmin.min.js"></script>
    <script src="../assets/js/setting-demo2.js"></script>

    <script>
$(document).ready(function() {
    // Toggle cart content
    $('#cart-toggle').on('click', function(e) {
        e.preventDefault();
        $('#cart-content').toggleClass('open');
    });

    // Add to cart functionality
    $('.add-to-cart').on('click', function(e) {
        e.preventDefault(); // Evitar que el enlace haga scroll o redirección

        // Obtener los datos del producto
        let productId = $(this).data('id');
        let productName = $(this).closest('.card-body').find('.card-title').text();
        let productDescription = $(this).closest('.card-body').find('.card-text').not('.card-price').text().trim();
        let productPrice = $(this).closest('.card-body').find('.card-price').text().replace('Precio: $', '').trim();
        let productImage = $(this).closest('.card').find('.card-img-top').attr('src');

        // Incrementar contador de carrito (opcional)
        let cartCount = $('#cart-count').text();
        $('#cart-count').text(parseInt(cartCount) + 1);

        // Construir elemento del carrito
        let cartItem = `
            <div class="cart-item" data-id="${productId}">
                <img src="${productImage}" class="cart-item-image" alt="${productName}">
                <p class="cart-item-title">${productName}</p>
                <p class="cart-item-description">${productDescription}</p>
                <p class="cart-item-price">Precio: $${productPrice}</p>
                <div class="cart-item-quantity">
                    <button class="decrement-quantity">-</button>
                    <input type="number" value="1" min="1" class="quantity-input">
                    <button class="increment-quantity">+</button>
                </div>
            </div>
        `;

        // Agregar elemento al carrito
        $('#cart-items').append(cartItem);
    });

    // Actualizar la cantidad del producto
    $('#cart-items').on('click', '.increment-quantity', function() {
        let $input = $(this).siblings('.quantity-input');
        $input.val(parseInt($input.val()) + 1);
    });

    $('#cart-items').on('click', '.decrement-quantity', function() {
        let $input = $(this).siblings('.quantity-input');
        if (parseInt($input.val()) > 1) {
            $input.val(parseInt($input.val()) - 1);
        }
    });

    // Cerrar contenido del carrito
    $('#cart-close').on('click', function() {
        $('#cart-content').removeClass('open');
    });
});
</script>
</body>
</html>
