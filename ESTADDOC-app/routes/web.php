<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
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

Route::get('/VER', [controladorVistas::class,'mostrarVistaconsultar'])->name('consultarr');

Route::get('/VR', [controladorVistas::class,'mostrarVistaeditar'])->name('editarr');

Route::post('/CONSULTAR',[controladorVistas::class,'buscar']);

Route::get('/CONSULTAR/{documento}',[controladorVistas::class,'verSolouno']);



Route::get('/', function () {
    return view('welcome');
});
