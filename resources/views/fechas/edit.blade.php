<!-- resources/views/fechas/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Fecha</h1>
    <form action="{{ route('fechas.update', $fecha->id_fecha) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" class="form-control" value="{{ $fecha->fecha }}">
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
