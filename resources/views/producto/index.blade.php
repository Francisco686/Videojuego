@extends('layouts.app')

@section('template_title')
    {{ __('Productos') }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #007bff; color: white;">
                    <h2>{{ __('Lista de Productos') }}</h2>
                    <a href="{{ route('productos.create') }}" class="btn btn-warning btn-lg">Agregar Producto</a> <!-- Botón más grande y llamativo -->
                </div>

                <div class="card-body" style="background-color: rgba(255, 255, 255, 0.9); padding: 20px;">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" style="background-color: #ffffff;">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="background-color: #6c757d; color: #fff;">No</th> <!-- Fondo gris para número -->
                                    <th scope="col" style="background-color: #ffc107; color: #fff;">Nombre</th> <!-- Fondo amarillo para nombre -->
                                    <th scope="col" style="background-color: #28a745; color: #fff;">Descripción</th> <!-- Fondo verde para descripción -->
                                    <th scope="col" style="background-color: #dc3545; color: #fff;">Precio</th> <!-- Fondo rojo para precio -->
                                    <th scope="col" style="background-color: #007bff; color: #fff;">Stock</th> <!-- Fondo azul para stock -->
                                    <th scope="col" style="background-color: #17a2b8; color: #fff;">Imagen</th> <!-- Fondo cian para imagen -->
                                    <th scope="col" style="background-color: #007bff; color: #fff;">Acciones</th> <!-- Fondo azul para acciones -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td style="background-color: #6c757d; color: #fff;">{{ ++$i }}</td> <!-- Fondo gris para número -->
                                        <td style="background-color: #ffc107; color: #fff;">{{ $producto->nombre }}</td> <!-- Fondo amarillo para nombre -->
                                        <td style="background-color: #28a745; color: #fff;">{{ $producto->descripcion }}</td> <!-- Fondo verde para descripción -->
                                        <td style="background-color: #dc3545; color: #fff;">{{ $producto->precio }}</td> <!-- Fondo rojo para precio -->
                                        <td style="background-color: #007bff; color: #fff;">{{ $producto->stock }}</td> <!-- Fondo azul para stock -->
                                        <td style="background-color: #17a2b8; color: #fff;">
                                            @if ($producto->imagen)
                                                <img src="{{ asset('storage/' . str_replace('public/', '', $producto->imagen)) }}" alt="{{ $producto->nombre }}" width="60">
                                            @else
                                                <span>No image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{ route('productos.show', $producto->id) }}" style="background-color: #007bff; color: #fff; font-weight: bold;">Mostrar</a>
                                            <a class="btn btn-primary btn-sm" href="{{ route('productos.edit', $producto->id) }}" style="background-color: #0069d9; border-color: #0062cc; color: #fff; font-weight: bold;">Editar</a>
                                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" style="background-color: #dc3545; border-color: #dc3545; color: #fff; font-weight: bold;">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {!! $productos->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
    <!-- Estilos específicos para la página de productos -->
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
        .btn-primary.btn-lg {
            background-color: #0056b3; /* Color más oscuro para el botón grande */
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
        .btn-info.btn-sm:hover,
        .btn-primary.btn-sm:hover,
        .btn-danger.btn-sm:hover {
            opacity: 0.9; /* Reducir la opacidad al pasar el cursor para indicar interactividad */
        }
        .table {
            background-color: #ffffff !important; /* Fondo blanco para la tabla */
        }
        .table th, .table td {
            border-color: #dddddd; /* Color de borde suave */
        }
    </style>
@endsection
