@extends('layouts.app')

@section('template_title')
    {{ __('Mostrar Proveedor') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ __('Detalles del Proveedor') }}</h2>
                    </div>

                    <div class="card-body">
                        <p><strong>Nombre:</strong> {{ $provedor->nombre }}</p>
                        <p><strong>Dirección:</strong> {{ $provedor->direccion }}</p>
                        <p><strong>Teléfono:</strong> {{ $provedor->telefono }}</p>
                        <p><strong>Correo:</strong> {{ $provedor->correo }}</p>
                        <a href="{{ route('provedores.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

