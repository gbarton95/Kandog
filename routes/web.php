<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PerroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

//Welcome
Route::get('/', function () {
    return view('welcome');
});

//Entrada
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Idiomas
Route::get('/locale/{locale}', 'LocaleController@setLocale')->name('setLocale');

//Rutas de perros
Route::post('perro/buscar', [PerroController::class, 'search'])->middleware(['auth', 'verified'])->name('perro.search');
Route::get('perro/ordenar', [PerroController::class, 'ordenarTabla'])->name('perro.ordenarTabla');
Route::resource('perro', PerroController::class)->middleware(['auth', 'verified']);

//Rutas de sesiones
Route::get('sesiones', 'SesionController@index')->middleware(['auth', 'verified'])->name('calendario');
Route::post('sesion/buscar', [SesionController::class, 'search'])->middleware(['auth', 'verified'])->name('sesion.search');
Route::get('sesion/create/{id}', 'SesionController@createSesion')->middleware(['auth', 'verified'])->name('sesion.create2');
Route::resource('sesion', SesionController::class)->middleware(['auth', 'verified']);

//Repositorio de archivos
Route::get('archivos', [FileController::class, 'index'])->middleware(['auth', 'verified'])->name('file.index');
Route::post('archivos/crear', [FileController::class, 'store'])->middleware(['auth', 'verified'])->name('file.store');
Route::get('archivo/descargar/{file}', [FileController::class, 'download'])->middleware(['auth', 'verified'])->name('file.download');
require __DIR__.'/auth.php';
