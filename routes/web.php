<?php

use App\Http\Controllers\ProvedorController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\TelefonoController;
use App\Http\Controllers\VentaMayoreoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FechaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CorreoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

// Ruta para la página de inicio usando HomeController
Route::get('home', [HomeController::class, 'index'])->name('home.index');

Auth::routes();


Route::resource('provedors', ProvedorController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('productos', ProductoController::class);
Route::resource('entradas', EntradaController::class);
Route::resource('telefonos', TelefonoController::class);
Route::resource('venta_mayoreo', VentaMayoreoController::class);
Route::resource('fechas', FechaController::class);
Route::resource('personas', PersonaController::class);
Route::get('enviar_correo', [CorreoController::class, 'enviarCorreo']);

// Ruta para el dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('tickets', TicketController::class);
Route::get('tickets/{ticket}', 'TicketController@show')->name('tickets.show');
Route::get('/tickets/{ticket}', 'TicketController@show')->name('tickets.show');


use App\Http\Controllers\GameController;

// Ruta para el juego de suma
Route::get('juego/suma', [GameController::class, 'juegoSuma'])->name('juego.suma');

// Ruta para el juego de suma
Route::get('juego/suma', [GameController::class, 'juegoSuma'])->name('juego.suma');

// Ruta para el juego de resta
Route::get('juego/resta', [GameController::class, 'juegoResta'])->name('juego.resta');

// Ruta para el juego de multiplicación
Route::get('juego/multiplicacion', [GameController::class, 'juegoMultiplicacion'])->name('juego.multiplicacion');
