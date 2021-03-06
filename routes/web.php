<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PliegosController;
use App\Http\Controllers\PliegoController;
use App\Http\Controllers\ConvocatoriaController;
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
    return view('vistaPrincipal');
});

Route::resource("pliego",PliegoController::class);

Route::resource("convocatoria",ConvocatoriaController::class);

Route::post('/convocatoria', [App\Http\Controllers\ConvocatoriaController::class, 'store'])->name('vistaPrincipal');

Route::get('/convocatoria:get/{id}', [App\Http\Controllers\ConvocatoriaController::class, 'edit'])->name('editar');

