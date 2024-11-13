@extends('layouts.app')

@section('template_title')
    Ventas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #007bff; color: white;">
                        <h2>{{ __('Ventas') }}</h2>
                        <a href="{{ route('ventas.create') }}" class="btn btn-warning btn-lg">Crear Nuevo</a>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body" style="background-color: rgba(255, 255, 255, 0.9); padding: 20px;">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" style="background-color: #ffffff;">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" style="background-color: #6c757d; color: #fff;">No</th>
                                        <th scope="col" style="background-color: #ffc107; color: #fff;">Producto Id</th>
                                        <th scope="col" style="background-color: #28a745; color: #fff;">Cantidad</th>
                                        <th scope="col" style="background-color: #dc3545; color: #fff;">Precio</th>
                                        <th scope="col" style="background-color: #007bff; color: #fff;">Total</th>
                                        <th scope="col" style="background-color: #17a2b8; color: #fff;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td style="background-color: #6c757d; color: #fff;">{{ $loop->index + 1 }}</td>
                                            <td style="background-color: #ffc107; color: #fff;">{{ $venta->nombre }}</td>
                                            <td style="background-color: #28a745; color: #fff;">{{ $venta->cantidad }}</td>
                                            <td style="background-color: #dc3545; color: #fff;">$ {{ $venta->precio }}</td>
                                            <td style="background-color: #007bff; color: #fff;">$ {{ $venta->total }}</td>
                                            <td style="background-color: #ffffff;">
                                                <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST">
                                                    <a class="btn btn-info btn-sm" href="{{ route('ventas.show', $venta->id) }}" style="background-color: #007bff; color: #fff; font-weight: bold;">Mostrar</a>
                                                    <a class="btn btn-primary btn-sm" href="{{ route('ventas.edit', $venta->id) }}" style="background-color: #0069d9; border-color: #0062cc; color: #fff; font-weight: bold;">Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" style="background-color: #dc3545; border-color: #dc3545; color: #fff; font-weight: bold;" onclick="event.preventDefault(); confirm('¿Estás seguro de eliminar?') ? this.closest('form').submit() : false;">Eliminar</button>
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
    </div>
@endsection

@section('styles')
    <!-- Estilos específicos para la página de ventas -->
    <style>
        body {
            background-color: #007bff; /* Color de fondo azul */
            color: white; /* Color de texto blanco */
            font-family: 'Arial', sans-serif; /* Tipo de letra Arial o similar */
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
        .btn-warning {
            background-color: #ffc107; /* Color amarillo para el botón de advertencia */
            border-color: #ffc107;
            color: #212529; /* Color de texto oscuro */
        }
        .btn-warning:hover {
            background-color: #e0a800; /* Color de hover más oscuro */
            border-color: #d39e00;
        }
        .btn-info.btn-sm,
        .btn-primary.btn-sm,
        .btn-danger.btn-sm {
            margin-right: 5px; /* Espacio entre botones */
        }
        .table {
            background-color: #ffffff !important; /* Fondo blanco para la tabla */
        }
        .table th, .table td {
            border-color: #dddddd; /* Color de borde suave */
        }
    </style>
@endsection
