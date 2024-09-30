<?php

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

//Route::get('/rrhh/listtrabajadores', [App\Http\Controllers\TrabajadorController::class, 'index']);

//Route::get('rrhh/createtrabajadores',[App\Http\Controllers\TrabajadorController::class,'create']);

//Route::get('/rrhh/createcontrato', [App\Http\Controllers\CreatecontratoController::class,'createcontrato']);

//Route::get('/rrhh/createfiniquito',[App\Http\Controllers\CreatefiniquitoController::class,'createfiniquito']);

//Route::get('/rrhh/asistencia', [App\Http\Controllers\AsistenciaController::class,'index']);

Route::resource('/rrhh/listtrabajadores',App\Http\Controllers\TrabajadorController::class);

Route::resource('/rrhh/createfiniquito',App\Http\Controllers\FiniquitoController::class);

//Route::resource('rrhh/listtrabajadores',App\Http\Controllers\TrabajadorController::class);

Route::resource('rrhh/contrato',App\Http\Controllers\ContratoController::class);



Route::resource('/system/proyectos', App\Http\Controllers\ProyectoController::class);


Route::resource('prm/clientesprov',App\Http\Controllers\ClientesprovController::class);

//Route::get('/system/createproyecto',[App\Http\Controllers\GestionproyectoController::class,'create']);

Route::get('/system/usuarios',[App\Http\Controllers\GestionusuarioController::class,'gestionusuarios']);

Route::get('/prm/list', [App\Http\Controllers\PrmlistController::class,'index']);

Route::get('/prm/orden',[App\Http\Controllers\PrmlistController::class,'create']);

Route::get('/prm/listsolicitud',[App\Http\Controllers\PrmsolicitudController::class,'index']);

Route::get('/prm/createsolicitud',[App\Http\Controllers\PrmsolicitudController::class, 'create']);

//Route::get('/prm/listproveedor',[App\Http\Controllers\PrmproveedorController::class, 'index']);

//Route::get('/prm/createproveedor',[App\Http\Controllers\PrmproveedorController::class,'create']);




//Route::get('/rrhh/list', function () {
//    return view('rrhh.list');
//})->middleware(middleware: 'auth');;

//Route::get('/rrhh/create', function () {
//    return view('rrhh.create');
//})->middleware(middleware: 'auth');;