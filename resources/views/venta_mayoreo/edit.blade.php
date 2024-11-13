@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Venta al Mayoreo</h1>
    <form action="{{ route('venta_mayoreo.update', $venta->id_mayoreo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_producto">Producto</label>
            <select name="id_producto" id="id_producto" class="form-control">
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}" {{ $producto->id == $venta->id_producto ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_proveedor">Proveedor</label>
            <select name="id_proveedor" id="id_proveedor" class="form-control">
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}" {{ $proveedor->id == $venta->id_proveedor ? 'selected' : '' }}>{{ $proveedor->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection

