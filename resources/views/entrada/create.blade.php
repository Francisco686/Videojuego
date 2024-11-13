@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Entrada
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Create') }} Entrada</h3>
                </div>
                <div class="card-body bg-white">
                    <form method="POST" action="{{ route('entradas.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cantidad_entradas" class="form-label">{{ __('Cantidad de Entradas') }}</label>
                                    <input type="number" name="cantidad_entradas" class="form-control @error('cantidad_entradas') is-invalid @enderror" value="{{ old('cantidad_entradas') }}" id="cantidad_entradas" placeholder="Cantidad de Entradas">
                                    @error('cantidad_entradas')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="id_producto" class="form-label">{{ __('Producto') }}</label>
                                    <select name="id_producto" class="form-control @error('id_producto') is-invalid @enderror" id="id_producto">
                                        <option value="">Selecciona un producto</option>
                                        @foreach($productos as $producto)
                                            <option value="{{ $producto->id }}" {{ old('id_producto') == $producto->id ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_producto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_proveedor" class="form-label">{{ __('Proveedor') }}</label>
                                    <select name="id_proveedor" class="form-control @error('id_proveedor') is-invalid @enderror" id="id_proveedor">
                                        <option value="">Selecciona un proveedor</option>
                                        @foreach($proveedores as $proveedor)
                                            <option value="{{ $proveedor->id }}" {{ old('id_proveedor') == $proveedor->id ? 'selected' : '' }}>{{ $proveedor->nombre }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_proveedor')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="precio_unitario" class="form-label">{{ __('Precio Unitario') }}</label>
                                    <input type="number" name="precio_unitario" class="form-control @error('precio_unitario') is-invalid @enderror" value="{{ old('precio_unitario') }}" id="precio_unitario" placeholder="Precio Unitario">
                                    @error('precio_unitario')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
