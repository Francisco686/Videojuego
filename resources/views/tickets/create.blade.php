@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Ticket</h1>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_venta">Venta</label>
            <select name="id_venta" id="id_venta" class="form-control">
                @foreach($ventas as $venta)
                    <option value="{{ $venta->id }}">{{ $venta->producto->nombre }} - Total: {{ $venta->total }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_fecha">Fecha</label>
            <select name="id_fecha" id="id_fecha" class="form-control">
                @foreach($fechas as $fecha)
                    <option value="{{ $fecha->id_fecha }}">{{ $fecha->fecha }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
