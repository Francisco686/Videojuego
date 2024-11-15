<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruleta de Planetas</title>
    <link rel="stylesheet" href="{{ asset('css/ruleta.css') }}">
</head>
<body>
    <div class="ruleta-container">
        <h1>Ruleta de Planetas</h1>
        <div id="ruleta">
            @foreach ($planetas as $planeta)
                <div class="sector"><span>{{ $planeta->nombre }}</span></div>
            @endforeach
        </div>
        <button onclick="girarRuleta()">Girar Ruleta</button>
    </div>

    <div id="ventanaEmergente" class="ventana-emergente" style="display: none;">
        <h2 id="nombrePlaneta"></h2>
        <img id="imagenPlaneta" src="" alt="Imagen del planeta">
        <p id="descripcionPlaneta"></p>
        <button onclick="cerrarVentana()">Cerrar</button>
    </div>

    <script src="{{ asset('js/ruleta.js') }}"></script>
</body>
</html>
