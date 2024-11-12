<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class OcController extends Controller
{
    //Controlador para vista del listado de Ordenesde Compra 
    public function index(){
        return view('prm.oc.index');
    }

    public function create(){
        return view('prm.oc.create');
    }

}
