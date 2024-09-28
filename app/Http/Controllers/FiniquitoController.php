<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiniquitoController extends Controller
//Controlador que redirige a la vista del modulo para la Creacion de Finiquito

{
    public function index(){
        return view('rrhh.createfiniquito');
    }
}
