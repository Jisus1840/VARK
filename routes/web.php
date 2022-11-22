<?php

use App\Http\Controllers\FormularioVarkController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\SugerenciaController;
use App\Http\Controllers\UserEmpresaController;
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
    return view('welcome');
});

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('formularioPersonalidad', function () {
    return view('formularioPersonalidad');
})->name('formularioPersonalidad');

Route::get('formularioVARK', function () {
    return view('formularioVARK');
})->name('formularioVARK');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function () {
    return view('/admin');
})->middleware(['auth'])->name('/admin');

require __DIR__.'/auth.php';



// ruta para exporta el excel de sugerencias
Route::get('/sugerencias/export', [SugerenciaController::class, 'export'])->name('descargar.sugerencia');
// ruta para el formulario de sugerencias

Route::resources([
    '/sugerencias' => SugerenciaController::class,
    'formularioVark' => FormularioVarkController::class,
    '/empresas' => EmpresaController::class,
    '/empresasUser' => UserEmpresaController::class
]);

// Route::get('/sugerencias', [SugerenciaController::class, 'create'])->name("sugerencias.create");
// Route::get('/sugerencias', [SugerenciaController::class, 'create'])->name("sugerencias.store");
