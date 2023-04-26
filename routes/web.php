<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\CapacitacionController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/w', function () {
    return view('welcome');
});
<<<<<<< HEAD
*/



Route::get('/dash', function () {
    return view('dashboard/index');
});
=======
Route::get('/dashboard', function () {
    return view('dashboard/index');
})->name('admin.home');



Route::get('/servicios', function () {
    return view('pagina_principal/servicios');
})->name('servicios');
Route::get('/clientes', function () {
    return view('pagina_principal/clientes');
})->name('clientes');
Route::get('/proyectos', function () {
    return view('pagina_principal/proyectos');
})->name('proyectos');
>>>>>>> fdf72d0fd574365fd15a7e36100e8a0f3037f019
Route::get('/contactanos', function () {
    return view('pagina_principal/contactanos');
})->name('contactanos');
Route::get('/inicio_sesion', function () {
    return view('pagina_principal/inicio_sesion');
})->name('inicio_sesion');

Route::get('/cambio_contraseña', function () {
    return view('pagina_principal/cambio_contraseña');
})->middleware('auth')->name('cambio_contraseña');

Route::get('/documentos', function () {
    return view('pagina_principal/documentos');
})->middleware('auth')->name('documentos');
/*
Route::get('/capacitaciones' , function () {
    return view('pagina_principal/capacitaciones');
})->name('capacitaciones');
Route::get('/capacitaciones', [CapacitacionController::class, 'mostrar']);
Route::controller(CapacitacionController::class, 'mostrar')->group(function () {
Route::get('/proyectos', function () {
    return view('pagina_principal/proyectos');
})->name('proyectos');
});
Route::get('/servicios', function () {
    return view('pagina_principal/servicios');
})->name('servicios');
Route::get('/quienes_somos', function () {
    return view('pagina_principal/quienes_somos');
})->name('quienes_somos');
Route::get('/', function () {
    return view('pagina_principal/principal');
})->name('principal');
Route::get('/clientes', function () {
    return view('pagina_principal/clientes');
})->name('clientes');
*/

Route::controller(LoginController::class)->group(function() {
    Route::post('/inicia-cliente','login_cliente')->name('inicia-cliente');
    Route::get('/finaliza-cliente','logout_cliente')->name('finaliza-cliente');

});


Route::controller(MediaController::class)->group(function () {
    Route::get('/quienes_somos' , 'mostrar_qs' )->name('quienes_somos');
    Route::get('/servicios' , 'mostrar_servicios' )->name('servicios');
    Route::get('/proyectos' , 'mostrar_proyectos' )->name('proyectos');
    Route::get('/' , 'mostrar_principal' )->name('principal');
});

Route::controller(CapacitacionController::class)->group(function () {
    Route::get('/capacitaciones' , 'mostrar' )->name('capacitaciones');
});

Route::controller(ClienteController::class)->group(function () {
    Route::get('/clientes' , 'mostrar' )->name('clientes');
});

Route::controller(ArchivoController::class)->group(function () {
    Route::get('/documentos_res' , 'mostrar' )->name('documentos_res');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ruta para ver lo relacionado con media
Route::resource('administrador/media', MediaController::class)->names('admin.archivosmedia');

// ruta para ver lo relacionado con archivos
Route::resource('administrador/documentos', ArchivoController::class)->names('admin.documentos');

// ruta para ver lo relacionado con capacitaciones
Route::resource('administrador/capacitaciones', CapacitacionController::class)->names('admin.capacitaciones');

// ruta para ver lo relacionado con iimagenes
Route::resource('administrador/imagenes', ImagenController::class)->names('admin.imagenes');

// ruta para ver lo relacionado con users
Route::resource('administrador/users', UserController::class)->names('admin.users');

// ruta para ver lo relacionado con las experiencias
Route::resource('administrador/experiencias', TrabajoController::class)->names('admin.experiencias');
 
// ruta para ver lo relacionado con los clientee
Route::resource('administrador/clientes', ClienteController::class)->names('admin.clientes');
 
