@extends('layouts.app')

@section('template_title')
    {{ __('Edit') }} Venta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Edit') }} Venta</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('ventas.update', $venta->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <strong>{{ __('Cantidad:') }}</strong>
                                <input type="text" name="cantidad" value="{{ $venta->cantidad }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>{{ __('Producto:') }}</strong>
                                <select name="producto_id" class="form-control">
                                    @foreach($productos as $producto)
                                        <option value="{{ $producto->id }}" {{ $producto->id == $venta->producto_id ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>{{ __('Precio Unitario:') }}</strong>
                                <input type="text" name="precio_unitario" value="{{ $venta->precio_unitario }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>{{ __('Total:') }}</strong>
                                <input type="text" name="total" value="{{ $venta->total }}" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                            <a class="btn btn-danger" href="{{ route('ventas.index') }}">{{ __('Cancel') }}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


