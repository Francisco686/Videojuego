@extends('layouts.app') <!-- Asegúrate de extender el layout principal si lo tienes -->

@section('content')
<div class="container">
    <h1>Listado de Tickets</h1>
    <a href="{{ route('tickets.create') }}" class="btn btn-success mb-3">Crear Nuevo Ticket</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Ticket</th>
                <th>Nombre del Producto</th>
                <th>Fecha</th>
                <th>Total de la Venta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->venta->producto->nombre }}</td> <!-- Aquí se muestra el nombre del producto -->
                <td>{{ $ticket->fecha->fecha }}</td> <!-- Aquí se muestra la fecha correctamente -->
                <td>{{ $ticket->venta->total }}</td> <!-- Aquí se muestra el total de la venta -->
                <td>
                    <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" style="display:inline;">
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
