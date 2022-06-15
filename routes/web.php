<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CecionariosController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PatentesController;
use App\Http\Controllers\PaginasController;
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
    return view('auth.login');
});

/* verificar las rutas con el emial confirmado */
Auth::routes(['verify' => true]);
// proteger las rutas del controlador con
/* public function __construct()
{
    $this->middleware(['verified']);
} */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ruta para obtener los datos de todos los usuarios
Route::get('/usuarios-get', [UsuariosController::class, 'getUsuarios'])->name('getUsuarios');
Route::get('/empresas-get', [EmpresaController::class, 'getEmpresas'])->name('getEmpresas');
Route::get('/admin-view', [UsuariosController::class, 'adminView'])->name('admin.view');
Route::get('/patentes-view', [PatentesController::class, 'patentesView'])->name('patentes.view');
Route::get('/paginasPatente-view', [PaginasController::class, 'paginasPatenteView'])->name('paginasPatente.view');

Route::resources([
    '/usuarios' => UsuariosController::class,
    '/cecionarios' => CecionariosController::class,
    '/empresas' => EmpresaController::class,
    '/patentes' => PatentesController::class
]);
