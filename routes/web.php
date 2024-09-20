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

Route::get('/rrhh/listtrabajadores', [App\Http\Controllers\ListtrabajadorController::class, 'index']);

Route::get('rrhh/createtrabajadores',[App\Http\Controllers\ListtrabajadorController::class,'create']);

Route::get('/rrhh/createcontrato', [App\Http\Controllers\CreatecontratoController::class,'createcontrato']);

Route::get('/rrhh/createfiniquito',[App\Http\Controllers\CreatefiniquitoController::class,'createfiniquito']);

Route::get('/rrhh/asistencia', [App\Http\Controllers\AsistenciaController::class,'index']);

Route::get('/system/proyectos',[App\Http\Controllers\GestionproyectoController::class,'gestionproyecto']);

Route::get('/system/usuarios',[App\Http\Controllers\GestionusuarioController::class,'gestionusuarios']);





//Route::get('/rrhh/list', function () {
//    return view('rrhh.list');
//})->middleware(middleware: 'auth');;

//Route::get('/rrhh/create', function () {
//    return view('rrhh.create');
//})->middleware(middleware: 'auth');;