<!-- resources/views/venta_mayoreo/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Venta al Mayoreo</h1>
    <form action="{{ route('venta_mayoreo.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_producto">Producto</label>
            <select name="id_producto" id="id_producto" class="form-control">
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_proveedor">Proveedor</label>
            <select name="id_proveedor" id="id_proveedor" class="form-control">
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
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

