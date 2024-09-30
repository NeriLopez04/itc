<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesprovController extends Controller
{
    //Controlador para agregar y ver listado de los Proveedores
    public function index(){
        return view('prm.clientesprov');
    }

    public function create(){
        return view('prm.createclient');
    }
}
