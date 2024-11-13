@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de Persona</h1>
    <p><strong>ID:</strong> {{ $persona->id }}</p>
    <p><strong>Nombre:</strong> {{ $persona->nombre }}</p>
    <p><strong>Apellido Paterno:</strong> {{ $persona->apellido_paterno }}</p>
    <p><strong>Apellido Materno:</strong> {{ $persona->apellido_materno }}</p>
    <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar esta persona?')">Eliminar</button>
    </form>
</div>
@endsection
