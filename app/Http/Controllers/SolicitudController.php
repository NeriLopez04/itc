<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    //Controllador para crear solicitud y listado de solicitudes de Cotización
    public function index(){
        return view('prm.solicitud.index');
    }

    public function create(){
        return view('prm.solicitud.create');
    }
}
