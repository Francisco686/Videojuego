<?php

namespace App\Http\Controllers;

use App\Models\Fecha;
use Illuminate\Http\Request;

class FechaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fechas = Fecha::all();
        return view('fechas.index', compact('fechas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fechas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
        ]);

        Fecha::create($request->all());

        return redirect()->route('fechas.index')->with('success', 'Fecha creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fecha = Fecha::findOrFail($id);
        return view('fechas.show', compact('fecha'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fecha = Fecha::findOrFail($id);
        return view('fechas.edit', compact('fecha'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha' => 'required|date',
        ]);

        $fecha = Fecha::findOrFail($id);
        $fecha->update($request->all());

        return redirect()->route('fechas.index')->with('success', 'Fecha actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fecha = Fecha::findOrFail($id);
        $fecha->delete();

        return redirect()->route('fechas.index')->with('success', 'Fecha eliminada con éxito.');
    }
}
