<?php

use App\Http\Controllers\SugerenciaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('formularioVARK');
});

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('formularioPersonalidad', function () {
    return view('formularioPersonalidad');
})->name('formularioPersonalidad');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// ruta para exporta el excel de sugerencias
Route::get('/sugerencias/export', [SugerenciaController::class, 'export']);
// ruta para el formulario de sugerencias
Route::get('/sugerencias', [SugerenciaController::class, 'index'])->name("sugerencias.index");