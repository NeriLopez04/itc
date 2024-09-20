<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CreatecontratoController extends Controller
//Controlador que redirige a la vista del modulo de Creacion de Contrato

{
    public function createcontrato(){
        return view ('rrhh.createcontrato');
    }
}
