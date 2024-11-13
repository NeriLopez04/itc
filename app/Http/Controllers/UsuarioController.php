<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function index(){
        return view('system.usuario.index');
    }

    public function create(){
        return view('system.usuario.create');
    }



}
