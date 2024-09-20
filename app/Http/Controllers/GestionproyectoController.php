<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionproyectoController extends Controller
//Controlador que redirige a la vista del modulo para la Gestion de proyectos (Alta, Listado, Edicion, etc).

{
    public function gestionproyecto(){
        return view('system.proyectos');
    }
}
