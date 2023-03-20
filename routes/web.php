<?php

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
    return view('pagina_principal/principal');
});

Route::get('/quienes_somos', function () {
    return view('pagina_principal/quienes_somos');
});
Route::get('/servicios', function () {
    return view('pagina_principal/servicios');
});
Route::get('/clientes', function () {
    return view('pagina_principal/clientes');
});