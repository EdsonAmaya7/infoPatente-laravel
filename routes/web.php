<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ruta para obtener los datos de todos los usuarios
Route::get('/usuarios-get',[UsuariosController::class,'getUsuarios'])->name('getUsuarios');
Route::get('/admin-view',[UsuariosController::class,'adminView'])->name('admin.view');

Route::resources([
    '/usuarios' => UsuariosController::class,
]);









