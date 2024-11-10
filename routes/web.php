<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Redirigir la ruta raíz a la lista de proyectos
Route::get('/', function () {
    return redirect()->route('proyectos.index');
});

// Rutas del recurso de proyectos
Route::resource('proyectos', ProyectoController::class);

// Ruta para generar el informe en PDF
Route::get('/informes/proyectos', function () {
    $proyectos = \App\Models\Proyecto::all(); // Obtener todos los proyectos

    $pdf = PDF::loadView('informes.proyectos', compact('proyectos'));

    return $pdf->download('informe_proyectos.pdf'); // Descargar el PDF
})->name('informes.proyectos');
