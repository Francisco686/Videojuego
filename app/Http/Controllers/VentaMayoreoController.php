<?php

namespace App\Http\Controllers;

use App\Models\VentaMayoreo;
use App\Models\Producto;
use App\Models\Provedor;
use App\Models\Fecha;
use Illuminate\Http\Request;

class VentaMayoreoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = VentaMayoreo::with(['producto', 'proveedor', 'fecha'])->get();
        return view('venta_mayoreo.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Producto::all();
        $proveedores = Provedor::all();
        $fechas = Fecha::all();
        return view('venta_mayoreo.create', compact('productos', 'proveedores', 'fechas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_producto' => 'required|exists:productos,id',
            'id_proveedor' => 'required|exists:proveedores,id',
            'id_fecha' => 'required|exists:fechas,id_fecha',
        ]);

        VentaMayoreo::create($request->all());

        return redirect()->route('venta_mayoreo.index')->with('success', 'Venta al mayoreo creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $venta = VentaMayoreo::with(['producto', 'proveedor', 'fecha'])->findOrFail($id);
        return view('venta_mayoreo.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $venta = VentaMayoreo::findOrFail($id);
        $productos = Producto::all();
        $proveedores = Provedor::all();
        $fechas = Fecha::all();
        return view('venta_mayoreo.edit', compact('venta', 'productos', 'proveedores', 'fechas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_producto' => 'required|exists:productos,id',
            'id_proveedor' => 'required|exists:proveedores,id',
            'id_fecha' => 'required|exists:fechas,id_fecha',
        ]);

        $venta = VentaMayoreo::findOrFail($id);
        $venta->update($request->all());

        return redirect()->route('venta_mayoreo.index')->with('success', 'Venta al mayoreo actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $venta = VentaMayoreo::findOrFail($id);
        $venta->delete();

        return redirect()->route('venta_mayoreo.index')->with('success', 'Venta al mayoreo eliminada con éxito.');
    }
}
