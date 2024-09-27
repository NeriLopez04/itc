<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrmlistController extends Controller
{
    //Controlador para vista del listado de Ordenesde Compra 
    public function index(){
        return view('prm.list');
    }

    public function create(){
        return view('prm.orden');
    }
}
