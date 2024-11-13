<!-- resources/views/venta_mayoreo/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de Venta al Mayoreo</h1>
    <div class="card">
        <div class="card-header">
            Detalles de la Venta
        </div>
        <div class="card-body">
            <h5 class="card-title">ID Venta: {{ $venta->id_mayoreo }}</h5>
            <p class="card-text"><strong>Producto:</strong> {{ $venta->producto->nombre }}</p>
            <p class="card-text"><strong>Proveedor:</strong> {{ $venta->proveedor->nombre }}</p>
            <a href="{{ route('venta_mayoreo.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection

