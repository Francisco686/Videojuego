<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Muestra la vista del juego de suma.
     *
     * @return \Illuminate\View\View
     */
    public function juegoSuma()
    {
        return view('juegos.suma'); // Asegúrate de tener una vista llamada 'suma.blade.php' en 'resources/views/juegos'
    }

    /**
     * Muestra la vista del juego de resta.
     *
     * @return \Illuminate\View\View
     */
    public function juegoResta()
    {
        return view('juegos.resta'); // Asegúrate de tener una vista llamada 'resta.blade.php' en 'resources/views/juegos'
    }

    /**
     * Muestra la vista del juego de multiplicación.
     *
     * @return \Illuminate\View\View
     */
    public function juegoMultiplicacion()
    {
        return view('juegos.multiplicacion'); // Asegúrate de tener una vista llamada 'multiplicacion.blade.php' en 'resources/views/juegos'
    }

    /**
     * Ejemplo de una función adicional que podrías usar para otro tipo de juego.
     * Muestra la vista del juego de división.
     *
     * @return \Illuminate\View\View
     */
    public function juegoDivision()
    {
        return view('juegos.division'); // Asegúrate de tener una vista llamada 'division.blade.php' en 'resources/views/juegos'
    }
}
