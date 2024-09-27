<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrmsolicitudController extends Controller
{
    //Controllador para crear solicitud y listado de solicitudes de Cotización
    public function index(){
        return view('prm.listsolicitud');
    }

    public function create(){
        return view('prm.createsolicitud');
    }
}
