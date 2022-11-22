<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\FormularioVarkController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PersonalidadController;
use App\Http\Controllers\SugerenciaController;
use App\Http\Controllers\UserEmpresaController;
use App\Http\Controllers\FormularioPersonalidadController;



Route::get('/', function () {
    return view('formularioVARK');
})->name('formularioVARK');
// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [AuthenticatedSessionController::class, 'create'])
->name('login');


Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

// Route::get('formularioPersonalidad', function () {
//     return view('formularioPersonalidad');
// })->name('formularioPersonalidad');

Route::get('formularioVARK', function () {
    return view('formularioVARK');
})->name('formularioVARK');
Route::get('formularioPersonalidad', function () {
    return view('formularioPersonalidad');
})->name('formularioPersonalidad');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/sugerencias/export', [SugerenciaController::class, 'export'])->name('descargar.sugerencia');
// ruta para el formulario de sugerencias

// Ruta para la grafica de vark por individuo
Route::get('/vark_grafica', [FormularioVarkController::class, 'varkGraph'])->name('vark.graph');

// Ruta para la grafica de personalidad por individuo
Route::get('/personalidad_grafica', [PersonalidadController::class, 'myersBriggsGraph'])->name('myersBriggs.graph');

// Ruta para la grafica grupal VARK y personalidad
Route::get('grafica_grupal', [PersonalidadController::class, 'graph'])->name('graph');


require __DIR__.'/auth.php';



Route::resources([
    '/sugerencias' => SugerenciaController::class,
    'formularioVark' => FormularioVarkController::class,
    '/empresas' => EmpresaController::class,
    '/empresasUser' => UserEmpresaController::class,
    'formularioPersonalidad' => FormularioPersonalidadController::class,
    '/empresasUser' => UserEmpresaController::class
]);

// Route::get('/sugerencias', [SugerenciaController::class, 'create'])->name("sugerencias.create");
// Route::get('/sugerencias', [SugerenciaController::class, 'create'])->name("sugerencias.store");