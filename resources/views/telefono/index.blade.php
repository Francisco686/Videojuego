@extends('layouts.app')

@section('template_title')
    Telefonos
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #007bff; color: white;">
                    <h2>{{ __('Telefonos') }}</h2>
                    <a href="{{ route('telefonos.create') }}" class="btn btn-primary btn-sm">{{ __('Crear Nuevo') }}</a>
                </div>

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Telefono</th>
                                    <th>Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($telefonos as $telefono)
                                    <tr>
                                        <td>{{ $telefono->id }}</td>
                                        <td>{{ $telefono->telefono }}</td>
                                        <td>{{ $telefono->provedor->nombre }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{ route('telefonos.show', $telefono->id) }}">{{ __('Ver') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('telefonos.edit', $telefono->id) }}">{{ __('Editar') }}</a>
                                            <form action="{{ route('telefonos.destroy', $telefono->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este teléfono?')">{{ __('Eliminar') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $telefonos->links() }}
            </div>
        </div>
    </div>
</section>
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
    .btn-primary.btn-sm {
        background-color: #0056b3; /* Color más oscuro para el botón pequeño */
        border-color: #004c99;
    }
    .btn-primary.btn-sm:hover {
        background-color: #004c99; /* Color de hover más oscuro para el botón pequeño */
        border-color: #004180;
    }
    .btn-danger.btn-sm {
        background-color: #dc3545; /* Color rojo para el botón de eliminar pequeño */
        border-color: #dc3545;
    }
    .btn-danger.btn-sm:hover {
        background-color: #c82333; /* Color de hover más oscuro para el botón de eliminar pequeño */
        border-color: #bd2130;
    }
</style>
@endsection



