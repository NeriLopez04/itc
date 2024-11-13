<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
//Controlador que redirige a la vista del modulo para la Gestion de proyectos (Alta, Listado, Edicion, etc).

{

    public function index(){
        return view('system.proyecto.index');
    }


    
    public function create(){
        return view('system.proyecto.create');
    }

}
