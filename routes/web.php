<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;

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
Route::get('/w', function () {
    return view('welcome');
});
Route::get('/dash', function () {
    return view('dashboard/administrador/index');
});
Route::get('/indexM', function () {
    return view('dashboard/Media/index');
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
Route::get('/proyectos', function () {
    return view('pagina_principal/proyectos');
});
Route::get('/contactanos', function () {
    return view('pagina_principal/contactanos');
});
Route::get('/inicio_sesion', function () {
    return view('pagina_principal/inicio_sesion');
});
Route::get('/cambio_contraseña', function () {
    return view('pagina_principal/cambio_contraseña');
});
Route::get('/documentos', function () {
    return view('pagina_principal/documentos');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ruta para ver lo relacionado con media
Route::resource('administrador/media', MediaController::class);