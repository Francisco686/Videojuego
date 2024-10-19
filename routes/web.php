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
use App\Http\Controllers\TicketController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio usando HomeController
Route::get('home', [HomeController::class, 'index'])->name('home.index');

// Rutas de autenticación (login, registro, etc.)
Auth::routes();

// Ruta para cerrar sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas de recursos para CRUD de diferentes modelos
Route::resource('provedors', ProvedorController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('productos', ProductoController::class);
Route::resource('entradas', EntradaController::class);
Route::resource('telefonos', TelefonoController::class);
Route::resource('venta_mayoreo', VentaMayoreoController::class);
Route::resource('fechas', FechaController::class);
Route::resource('personas', PersonaController::class);
Route::resource('tickets', TicketController::class);

// Rutas para la vista de cada ticket
Route::get('tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');

// Ruta para el dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Ruta para enviar correos
Route::get('enviar_correo', [CorreoController::class, 'enviarCorreo']);

// Rutas de juegos usando GameController
Route::get('juego/suma', [GameController::class, 'juegoSuma'])->name('juego.suma');
Route::get('juego/resta', [GameController::class, 'juegoResta'])->name('juego.resta');
Route::get('juego/multiplicacion', [GameController::class, 'juegoMultiplicacion'])->name('juego.multiplicacion');

// Ruta raíz para redirigir al home si es necesario
Route::get('/', function () {
    return redirect()->route('home.index');
});
