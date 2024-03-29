<?php

use App\Http\Controllers\CarlosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CecionariosController;
use App\Http\Controllers\ConfirmarDatosController;
use App\Http\Controllers\DobleAutentificacionController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\MostrarDocuementosController;
use App\Http\Controllers\PatentesController;
use App\Http\Controllers\PaginasController;
use App\Http\Middleware\dobleAutentificacion;

// use phpDocumentor\Reflection\Types\Resource_;

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
 return view('inicio');
});

// Ruta para la vista de inicio
Route::get('inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


/* verificar las rutas con el emial confirmado */
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth']], function () {

// ruta para obtener los datos de todos los usuarios
Route::get('/usuarios-get', [UsuariosController::class, 'getUsuarios'])->name('getUsuarios');
Route::get('/patentes-get', [PatentesController::class, 'getPatentes'])->name('getPatentes');
Route::get('/empresas-get', [EmpresaController::class, 'getEmpresas'])->name('getEmpresas');

Route::get('/admin-view', [UsuariosController::class, 'adminView'])
    ->name('admin.view');


Route::get('/patentes-view', [PatentesController::class, 'patentesView'])
    ->name('patentes.view');

Route::get('/paginasPatente-view', [PaginasController::class, 'paginasPatenteView'])->name('paginasPatente.view');
Route::get('/index', [PaginasController::class, 'patentesIndex'])->name('patentes.index');
Route::get('/ultima-patente', [PatentesController::class, 'getUltimaPatente'])->name('ultimaPatente');

//formulario doble autentificacion

Route::get('/verificacion', [DobleAutentificacionController::class, 'index'])
     ->middleware('doble.autentificacion')
    ->name('doble.autentificacion');

Route::post('/verificacion', [DobleAutentificacionController::class, 'store'])->name('verificar.codigo');


//path that returns a view with a confirmation email after sending an email with the license
Route::get('/confirmar-datos', [ConfirmarDatosController::class, 'index'])->name('correo.download');

//form thaht validate email
Route::post('/confirmar-form', [ConfirmarDatosController::class, 'enviarCorreo'])->name('correo.form');


Route::get('download', function () {
    return  response()->download(public_path('/programa/InfoPatent-setup.exe'), 'infoPatent-setup.exe');
})->name('download');

Route::get('download/infoWine', function () {
    return  response()->download(public_path('/programa/InfoWine.exe'), 'InfoWine.exe');
})->name('download.infoWine');


Route::get('/carlos', CarlosController::class)->name('carlos');



Route::get('/mostrar',[MostrarDocuementosController::class,'pdf'])->name('mostrarPdf');
Route::get('/mostrarEjemplo',[MostrarDocuementosController::class,'word'])->name('mostrarWord');
Route::get('/ejemplos-patentes',[PatentesController::class,'ejemplosPatentes'])->name('patentes.ejemplosPatentes');


Route::resources([
    '/usuarios' => UsuariosController::class,
    '/cecionarios' => CecionariosController::class,
    '/empresas' => EmpresaController::class,
    '/patentes' => PatentesController::class,
    '/paginas' => PaginasController::class,
]);

// });
