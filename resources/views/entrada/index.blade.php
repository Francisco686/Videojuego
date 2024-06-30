@extends('layouts.app')

@section('template_title')
    Entradas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header" style="background-color: #007bff; color: white;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Entradas') }}
                            </span>
                             <div class="float-right">
                                <a href="{{ route('entradas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Cantidad de Entradas</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Proveedor</th>
                                        <th scope="col">Precio Unitario</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entradas as $entrada)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $entrada->cantidad_entradas }}</td>
                                            <td>{{ $entrada->id_producto }}</td>
                                            <td>{{ $entrada->id_proveedor }}</td>
                                            <td>{{ $entrada->precio_unitario }}</td>
                                            <td>{{ $entrada->total }}</td>
                                            <td>
                                                <form action="{{ route('entradas.destroy', $entrada->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('entradas.show', $entrada->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('entradas.edit', $entrada->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta entrada?')"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $entradas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <!-- Estilos específicos para la página de entradas -->
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
        .btn-success {
            background-color: #28a745; /* Color verde para botón de éxito */
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838; /* Color de hover más oscuro */
            border-color: #1e7e34;
        }
        .btn-danger {
            background-color: #dc3545; /* Color rojo para botón de peligro */
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333; /* Color de hover más oscuro */
            border-color: #bd2130;
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
