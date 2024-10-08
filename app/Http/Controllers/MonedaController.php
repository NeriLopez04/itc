<?php

namespace App\Http\Controllers;
use App\Models\Moneda;

use Illuminate\Http\Request;

class MonedaController extends Controller
{
    //Controlador para los modulos de Moneda en el que se Crearan, Editaran, Actualizaran y Eliminarán campos.
    public function index(){
        $monedas = Moneda::all();
        return view('prm.moneda',['monedas'=>$monedas]);
    }

    public function create(){
        return view('prm.createmoneda');
    }

    public function store(Request $request)
    {
        //Validacion de Datos
        $data = $request->validate([
            'moneda' => 'required|string|max:50',
            'conversion' => 'required|numeric|min:0',
        ]);
        //Creacion de la Moneda
        Moneda::create($data);

        //Redireccion con mendaje de exito
        return redirect()->route('moneda.create')->with('success', 'Moneda creada con exito.');
    }
}
