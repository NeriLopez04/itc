<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrmproveedorController extends Controller
{
    //Controlador para agregar y ver listado de los Proveedores
    public function index(){
        return view('prm.listproveedor');
    }

    public function create(){
        return view('prm.createproveedor');
    }
}
