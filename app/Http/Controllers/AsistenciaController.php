<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index(){
        return view('rrhh.asistencia.index');
    }
    
    public function create(){
        return view('rrhh.asistencia.create');
    }
}
