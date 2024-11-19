<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
//Controlador que redirige a la vista del modulo para la Gestion de proyectos (Alta, Listado, Edicion, etc).

{

    public function index(){
        return view('system.proyecto.index');
    }


    
    //public function create(){
    //    return view('system.proyecto.create');
    //}

    public function create()
    {
        $monedas = Moneda::all(); // Obtiene todas las monedas
        return view('system.proyectos.create', compact('monedas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_itc' => 'required|string|max:255',
            'nombre_proy' => 'required|string|max:255',
            'reg_patronal' => 'required|string|max:255',
            'categoria_laboral' => 'required|string|max:255',
            'cp'=> 'required|integer|',
            
            'descripcion' => 'nullable|string',
            'moneda_id' => 'required|exists:monedas,id',
        ]);

        Proyecto::create($validated); 

        return redirect()->route('system.proyectos.index')->with('success', 'Proyecto creado exitosamente.');
    }


}
