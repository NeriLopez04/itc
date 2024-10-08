<?php

namespace App\Http\Controllers;
use App\Models\Moneda;

use Illuminate\Http\Request;

class MonedaController extends Controller
{
    //Controlador para los modulos de Moneda en el que se Crearan, Editaran, Actualizaran y Eliminarán campos.
    public function index(){
        $monedas = Moneda::all();  //Obtiene todas las monedas
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
        return redirect()->route('moneda.index')->with('success', 'Moneda creada con exito.');
    }

    public function destroy($id){
        $monedas = Moneda::findOrFail($id);
        $monedas->delete();


        return redirect()->route('moneda.index')->with('success','Moneda Eliminada Con Exito.w');
    }

    public function edit($id){
        $monedas = Moneda::findOrFall($id); //Busca la Moneda por ID
        return response()->json($monedas); //Devielve la moneda como Json
    }
    
    public function update(Request $request, $id){
        $request->validate([
            'moneda' => 'required|string|max:50',
            'conversion' => 'required|numeric|min:0',
        ]);

        $monedas=Moneda::findOrFail($id);
        $monedas->moneda=$request->imput('moneda');
        $monedas->conversion=$request->input('conversion');
        $monedas->save();

        return redirect()->route('moneda.index')->with('success','Moneda Actualizada con exito.');
    }
}
