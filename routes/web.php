<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EsAsociadoController;
use App\Http\Controllers\AsociadoController;
use App\Http\Controllers\NoAsociadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoProductoController;
use App\Http\Controllers\VentaController;
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

Route::get('/', function () {
    return view('home');
});

Route::resource('/es-asociados', EsAsociadoController::class);

Route::resource('/asociados', AsociadoController::class);

Route::resource('/no-asociados', NoAsociadoController::class);

Route::resource('/productos', ProductoController::class);

Route::resource('/tipo-productos', TipoProductoController::class);

Route::resource('/ventas', VentaController::class);

Auth::routes();

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

