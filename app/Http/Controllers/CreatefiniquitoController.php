<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatefiniquitoController extends Controller
//Controlador que redirige a la vista del modulo para la Creacion de Finiquito

{
    public function createfiniquito(){
        return view('rrhh.createfiniquito');
    }
}
