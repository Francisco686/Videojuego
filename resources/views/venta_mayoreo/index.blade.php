@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #007bff; color: white;">
                    <h2>Listado de Ventas al Mayoreo</h2>
                    <a href="{{ route('venta_mayoreo.create') }}" class="btn btn-success mb-3">Crear Nueva Venta al Mayoreo</a>
                </div>

                <div class="card-body bg-white">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID Mayoreo</th>
                                <th>Producto</th>
                                <th>Proveedor</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ventas as $venta)
                            <tr>
                                <td>{{ $venta->id_mayoreo }}</td>
                                <td>{{ $venta->producto->nombre }}</td>
                                <td>{{ $venta->proveedor->nombre }}</td>
                                <td>{{ optional($venta->fecha)->fecha }}</td>
                                <td>
                                    <a href="{{ route('venta_mayoreo.show', $venta->id_mayoreo) }}" class="btn btn-primary">Ver</a>
                                    <a href="{{ route('venta_mayoreo.edit', $venta->id_mayoreo) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('venta_mayoreo.destroy', $venta->id_mayoreo) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar esta venta al mayoreo?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    body {
        background-color: #007bff; /* Color de fondo azul */
        color: white; /* Color de texto blanco */
    }
    .card {
        margin-top: 20px;
        background-color: rgba(255, 255, 255, 0.9); /* Fondo semi-transparente para la tarjeta */
        padding: 20px;
    }
    .btn-primary {
        background-color: #0069d9; /* Color azul más oscuro para el botón primario */
        border-color: #0062cc;
    }
    .btn-primary:hover {
        background-color: #0056b3; /* Color de hover más oscuro */
        border-color: #004c99;
    }
    .btn-success {
        background-color: #28a745; /* Color verde para el botón de éxito */
        border-color: #28a745;
    }
    .btn-success:hover {
        background-color: #218838; /* Color de hover más oscuro para el botón de éxito */
        border-color: #1e7e34;
    }
    .btn-warning {
        background-color: #ffc107; /* Color amarillo para el botón de advertencia */
        border-color: #ffc107;
    }
    .btn-warning:hover {
        background-color: #e0a800; /* Color de hover más oscuro para el botón de advertencia */
        border-color: #d39e00;
    }
    .btn-danger {
        background-color: #dc3545; /* Color rojo para el botón de eliminar */
        border-color: #dc3545;
    }
    .btn-danger:hover {
        background-color: #c82333; /* Color de hover más oscuro para el botón de eliminar */
        border-color: #bd2130;
    }
</style>
@endsection

