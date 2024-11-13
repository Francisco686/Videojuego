@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de Ticket</h1>
    <div class="card">
        <div class="card-header">
            Detalles del Ticket
        </div>
        <div class="card-body">
            <h5 class="card-title">ID Ticket: {{ $ticket->id }}</h5>
            <p class="card-text"><strong>Producto Vendido:</strong> {{ $ticket->venta->producto->nombre }}</p>
            <p class="card-text"><strong>Total de la Venta:</strong> {{ $ticket->total }}</p>
            <a href="{{ route('tickets.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
