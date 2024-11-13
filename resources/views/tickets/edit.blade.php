<!-- resources/views/tickets/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Ticket</h1>
    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_venta">ID Venta</label>
            <select name="id_venta" id="id_venta" class="form-control">
                @foreach($ventas as $venta)
                    <option value="{{ $venta->id }}" {{ $venta->id == $ticket->id_venta ? 'selected' : '' }}>{{ $venta->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_fecha">Fecha</label>
            <select name="id_fecha" id="id_fecha" class="form-control">
                @foreach($fechas as $fecha)
                    <option value="{{ $fecha->id_fecha }}" {{ $fecha->id_fecha == $ticket->id_fecha ? 'selected' : '' }}>{{ $fecha->fecha }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
