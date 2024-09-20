<?php

namespace App\Http\Controllers;

use App\Models\Listtrabajador;
use Illuminate\Http\Reuest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ListtrabajadorController extends Controller
//Controlador que redirige a la vista del modulo de Listado de trabajadores

{
    public function index() {
        $trabajadores = Listtrabajador::all();
        return view ('rrhh.listtrabajadores',['trabajadores'=>$trabajadores]);
    }
}
