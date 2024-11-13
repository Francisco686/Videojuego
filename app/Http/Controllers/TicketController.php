<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Venta; // Modelo de Venta según tu aplicación
use App\Models\Fecha;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index() 
    {
        $tickets = Ticket::with(['venta.producto', 'fecha'])->get();
        return view('tickets.index', compact('tickets'));
    }



    public function create()
    {
        $ventas = Venta::all();
        $fechas = Fecha::all();
        return view('tickets.create', compact('ventas', 'fechas'));
    }

    public function store(Request $request)
{
    $request->validate([
        'id_venta' => 'required|exists:ventas,id',
        'id_fecha' => 'required|exists:fechas,id_fecha',
    ]);

    // Obtener la venta seleccionada y su total
    $venta = Venta::findOrFail($request->id_venta);
    $total_venta = $venta->total;

    // Crear el nuevo ticket con los datos recibidos
    $ticket = new Ticket();
    $ticket->id_venta = $request->id_venta;
    $ticket->id_fecha = $request->id_fecha;
    $ticket->total = $total_venta; // Aquí se guarda el total de la venta en el ticket

    $ticket->save();

    return redirect()->route('tickets.index')->with('success', 'Ticket creado con éxito.');
}

    public function show($id)
    {
        $ticket = Ticket::with(['venta.producto'])->findOrFail($id); // Cargar la relación con Producto
        return view('tickets.show', compact('ticket'));
    }

    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ventas = Venta::all();
        $fechas = Fecha::all();
        return view('tickets.edit', compact('ticket', 'ventas', 'fechas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_venta' => 'required|exists:ventas,id',
            'id_fecha' => 'required|exists:fechas,id_fecha',
        ]);

        // Obtener el total de la venta desde la tabla Venta
        $venta = Venta::findOrFail($request->id_venta);
        $total_venta = $venta->total;

        // Agregar el total de la venta al request
        $request->merge(['total_venta' => $total_venta]);

        $ticket = Ticket::findOrFail($id);
        $ticket->update($request->all());

        return redirect()->route('tickets.index')->with('success', 'Ticket actualizado con éxito.');
    }

    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->route('tickets.index')->with('success', 'Ticket eliminado con éxito.');
    }
}
