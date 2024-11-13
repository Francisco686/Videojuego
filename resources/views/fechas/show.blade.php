<!-- resources/views/fechas/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de Fecha</h1>
    <div class="card">
        <div class="card-header">
            Detalles de la Fecha
        </div>
        <div class="card-body">
            <h5 class="card-title">ID Fecha: {{ $fecha->id_fecha }}</h5>
            <p class="card-text"><strong>Fecha:</strong> {{ $fecha->fecha }}</p>
            <a href="{{ route('fechas.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection

