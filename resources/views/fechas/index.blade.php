<!-- resources/views/fechas/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Fechas</h1>
    <a href="{{ route('fechas.create') }}" class="btn btn-primary">Agregar Fecha</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fechas as $fecha)
                <tr>
                    <td>{{ $fecha->id_fecha }}</td>
                    <td>{{ $fecha->fecha }}</td>
                    <td>
                        <a href="{{ route('fechas.show', $fecha->id_fecha) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('fechas.edit', $fecha->id_fecha) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('fechas.destroy', $fecha->id_fecha) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
