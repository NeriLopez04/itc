<?php

use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\OcController;
use App\Http\Controllers\CargoController;
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


Route::resource('system/proyectos', App\Http\Controllers\ProyectoController::class);



//Rutas de los controladores del modulo PRM / Procura y Logistica

Route::resource('prm/oc', App\Http\Controllers\OcController::class);

Route::resource('prm/solicitud', App\Http\Controllers\SolicitudController::class);

Route::resource('prm/compania', App\Http\Controllers\CompaniaController::class);
//Agregar a PRM / Procura y Logistica
Route::resource('moneda', App\Http\Controllers\MonedaController::class);

//Rutas de los controladores del modulo System

Route::resource('system/proyecto', App\Http\Controllers\ProyectoController::class);

Route::resource('system/usuario', App\Http\Controllers\UsuarioController::class);


















///

//Este es una ruta para incertar datos desde el controlador

//Route::get('/insert-cargos', [CargoController::class, 'store']);


//Route::resource('prm/clientesprov',App\Http\Controllers\ClientesprovController::class);

//Route::get('/system/createproyecto',[App\Http\Controllers\GestionproyectoController::class,'create']);

//Route::get('/system/usuarios',[App\Http\Controllers\GestionusuarioController::class,'gestionusuarios']);

//Route::get('/prm/list', [App\Http\Controllers\PrmlistController::class,'index']);

//Route::get('/prm/orden',[App\Http\Controllers\PrmlistController::class,'create']);

//Route::get('/prm/listsolicitud',[App\Http\Controllers\PrmsolicitudController::class,'index']);

//Route::get('/prm/createsolicitud',[App\Http\Controllers\PrmsolicitudController::class, 'create']);

//Route::get('/prm/listproveedor',[App\Http\Controllers\PrmproveedorController::class, 'index']);

//Route::get('/prm/createproveedor',[App\Http\Controllers\PrmproveedorController::class,'create']);




//Route::get('/rrhh/list', function () {
//    return view('rrhh.list');
//})->middleware(middleware: 'auth');;

//Route::get('/rrhh/create', function () {
//    return view('rrhh.create');
//})->middleware(middleware: 'auth');;