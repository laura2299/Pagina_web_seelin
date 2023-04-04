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
})->name('principal');
Route::get('/w', function () {
    return view('welcome');
});
Route::get('/dash', function () {
    return view('dashboard/administrador/index');
});

Route::get('/quienes_somos', function () {
    return view('pagina_principal/quienes_somos');
})->name('quienes_somos');
Route::get('/servicios', function () {
    return view('pagina_principal/servicios');
})->name('servicios');
Route::get('/clientes', function () {
    return view('pagina_principal/clientes');
})->name('clientes');
Route::get('/proyectos', function () {
    return view('pagina_principal/proyectos');
})->name('proyectos');
Route::get('/contactanos', function () {
    return view('pagina_principal/contactanos');
})->name('contactanos');
Route::get('/inicio_sesion', function () {
    return view('pagina_principal/inicio_sesion');
})->name('inicio_sesion');
Route::get('/cambio_contraseña', function () {
    return view('pagina_principal/cambio_contraseña');
})->name('cambio_contraseña');
Route::get('/documentos', function () {
    return view('pagina_principal/documentos');
})->name('documentos');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
