<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ContratoController extends Controller
//Controlador que redirige a la vista del modulo de Creacion de Contrato

{
    public function createcontrato(){
        return view ('rrhh.contrato');
    }
}
