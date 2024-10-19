<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Servicios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        select, input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registro de Servicios</h2>
        <form>
            <label for="id_servicio">ID Servicio</label>
            <select id="id_servicio" name="id_servicio">
                <option value="1">Servicio 1</option>
                <option value="2">Servicio 2</option>
                <!-- Opciones dinámicas desde la base de datos -->
            </select>

            <label for="desc_servicio">Descripción del Servicio</label>
            <input type="text" id="desc_servicio" name="desc_servicio" required>

            <button type="submit">Registrar Servicio</button>
        </form>
    </div>
</body>
</html>
