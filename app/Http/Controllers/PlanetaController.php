<?php

namespace App\Http\Controllers;

use App\Models\Planeta;
use Illuminate\Http\Request;

class PlanetaController extends Controller
{
    public function index()
    {
        $planetas = Planeta::all();
        return response()->json($planetas);
    }

    public function obtenerInformacion($id)
    {
        $planeta = Planeta::find($id);

        if (!$planeta) {
            return response()->json(['error' => 'Planeta no encontrado'], 404);
        }

        return response()->json($planeta);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'imagen' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        $planeta = Planeta::create($validatedData);

        return response()->json(['message' => 'Planeta creado con éxito', 'data' => $planeta], 201);
    }

    public function update(Request $request, $id)
    {
        $planeta = Planeta::find($id);

        if (!$planeta) {
            return response()->json(['error' => 'Planeta no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'imagen' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|required|string',
        ]);

        $planeta->update($validatedData);

        return response()->json(['message' => 'Planeta actualizado con éxito', 'data' => $planeta]);
    }

    public function destroy($id)
    {
        $planeta = Planeta::find($id);

        if (!$planeta) {
            return response()->json(['error' => 'Planeta no encontrado'], 404);
        }

        $planeta->delete();

        return response()->json(['message' => 'Planeta eliminado con éxito']);
    }

    public function mostrarRuleta()
    {
        $planetas = Planeta::all();
        return view('ruleta', compact('planetas'));
    }
}
