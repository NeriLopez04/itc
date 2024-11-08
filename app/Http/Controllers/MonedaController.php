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
            'coin' => 'required|string|max:50',
            'conversion' => 'required|numeric|min:0',
        ]);
        //Creacion de la Moneda
        Moneda::create($data);

        //Redireccion con mendaje de exito
        return redirect()->route('moneda.index')->with('success', 'Moneda creada con exito.');
    }

    public function show(Moneda $monedas)
    {
        return view ('moneda.show', compact('moneda'));

    }

    public function edit($id){
        $moneda = Moneda::findOrFail($id); //Busca la Moneda por ID
        return response()->json($moneda);
        //return response()->json($monedas); //Devielve la moneda como Json
    }

    public function update(Request $request, $id){

        $request->validate([
            'coin' => 'required|string|max:50',
            'conversion' => 'required|numeric|min:0',
        ]);

        $monedas = Moneda::findOrFail($id); //Busca la moneda por id
        $monedas->coin = $request->input('coin'); //Asigna el valor a coin
        $monedas->conversion = $request->input('conversion'); //Asigna el valor de 'conversion'
        $monedas->save(); //Guarda cambios

        return redirect()->route('moneda.index')->with('success','Moneda Actualizada con exito.');
    }

    public function destroy($id){
        $monedas = Moneda::findOrFail($id);
        $monedas->delete();


        return redirect()->route('moneda.index')->with('success','Moneda Eliminada Con Exito.');
    }

}
