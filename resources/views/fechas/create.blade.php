<!-- resources/views/fechas/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Fecha</h1>
    <form action="{{ route('fechas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
