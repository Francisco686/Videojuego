<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planeta; 

class RuletaController extends Controller
{
    public function index()
    {
        $planetas = Planeta::all(); 
        return view('ruleta', compact('planetas')); 
    }
}
