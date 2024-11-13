@extends('layouts.app')

@section('template_title')
<<<<<<< HEAD
    Detalles de Venta - {{ $venta->id }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">Detalles de Venta - {{ $venta->id }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="mb-3">ID de Venta:</h4>
                            <p>{{ $venta->id }}</p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mb-3">Fecha de Venta:</h4>
                            <p>{{ $venta->created_at->format('d/m/Y H:i:s') }}</p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mb-3">Cliente:</h4>
                            <p>{{ $venta->cliente }}</p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mb-3">Total:</h4>
                            <p>${{ $venta->total }}</p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mb-3">Productos Vendidos:</h4>
                            @if ($venta->productos)
                                @if ($venta->productos->isNotEmpty())
                                    <ul>
                                        @foreach ($venta->productos as $producto)
                                            <li>{{ $producto->nombre }} ({{ $producto->pivot->cantidad }} unidades)</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No se encontraron productos vendidos.</p>
                                @endif
                            @else
                                <p>No hay información de productos vendidos.</p>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('ventas.index') }}" class="btn btn-primary mt-4">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
=======
    {{ __('Show') }} Venta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Show') }} Venta</span>
                    </div>
                    <div class="card-body bg-white">
                        <div class="form-group">
                            <strong>{{ __('ID:') }}</strong>
                            {{ $venta->id }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Cantidad:') }}</strong>
                            {{ $venta->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Producto:') }}</strong>
                            {{ $venta->producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Precio Unitario:') }}</strong>
                            {{ $venta->precio_unitario }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Total:') }}</strong>
                            {{ $venta->total }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Fecha de Creación:') }}</strong>
                            {{ $venta->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Fecha de Actualización:') }}</strong>
                            {{ $venta->updated_at }}
                        </div>
                        <a class="btn btn-primary" href="{{ route('ventas.index') }}">{{ __('Back') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
>>>>>>> a245bbb49dfeb83957640dfd6183c4035370411f
@endsection
