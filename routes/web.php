<?php

use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\OcController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CompaniaController;
use App\Http\Controllers\MonedaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
})->middleware(middleware: 'auth');;

//Auth::routes(['register'=>false]);

Auth::routes(['register']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas de los controladores del modulo RRHH

Route::resource('rrhh/asistencia', App\Http\Controllers\AsistenciaController::class);

Route::resource('rrhh/contrato',App\Http\Controllers\ContratoController::class);

Route::resource('rrhh/finiquito', App\Http\Controllers\FiniquitoController::class);

Route::resource('/rrhh/trabajadores',App\Http\Controllers\TrabajadorController::class);


//Rutas de los controladores del modulo PRM / Procura y Logistica

Route::resource('prm/oc', App\Http\Controllers\OcController::class);

Route::resource('prm/solicitud', App\Http\Controllers\SolicitudController::class);

Route::resource('prm/compania', App\Http\Controllers\CompaniaController::class);

//Agregar a PRM / Procura y Logistica
Route::resource('moneda', App\Http\Controllers\MonedaController::class);
Route::get('prm/compania/create',[CompaniaController::class, 'create'])->name('compania.create');

//Rutas de los controladores del modulo System

Route::resource('system/proyecto', App\Http\Controllers\ProyectoController::class);

Route::resource('system/usuario', App\Http\Controllers\UsuarioController::class);


//Route::get('/rrhh/list', function () {
//    return view('rrhh.list');
//})->middleware(middleware: 'auth');;

//Route::get('/rrhh/create', function () {
//    return view('rrhh.create');
//})->middleware(middleware: 'auth');;