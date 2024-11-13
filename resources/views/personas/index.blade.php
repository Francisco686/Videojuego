@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Personas</h1>
    <a href="{{ route('personas.create') }}" class="btn btn-primary mb-3">Crear Persona</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
            <tr>
                <td>{{ $persona->id }}</td>
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->apellido_paterno }}</td>
                <td>{{ $persona->apellido_materno }}</td>
                <td>
                    <a href="{{ route('personas.show', $persona->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar esta persona?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
