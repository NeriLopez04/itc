<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionusuarioController extends Controller
//Controlador que manda a llamar la vista del modulo de Panel de Usuarios

{
    public function gestionusuarios(){
        return view('system.usuarios');
    }
}
