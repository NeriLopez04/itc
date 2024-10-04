<?php

namespace App\Http\Controllers;

use App\Models\Listtrabajador;
use Illuminate\Http\Reuest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrabajadorController extends Controller
//Controlador que redirige a la vista del modulo de Listado de trabajadores

{
    public function index() {
        $trabajadores = Listtrabajador::all();
        return view ('rrhh.trabajadores',['trabajadores'=>$trabajadores]);
    }

    //public function create(){
    //    return view ('rrhh.createtrabajadores');

    //}
    public function getEnumValues($table,$field)
    {
        // Obtén los valores ENUM del campo 'genero' de la tabla 'genero'
        $type = DB::select("SHOW COLUMNS FROM {$table} WHERE Field = '$field'")[0]->Type;

        // Extrae los valores entre paréntesis
        preg_match('/^enum\((.*)\)$/', $type, $matches);

        // Separa los valores y limpia las comillas
        return array_map(function($value) {
            return trim($value, "'");
        }, explode(',', $matches[1]));
    }

    public function create(){
        //Obtiene valores ENUM de varios campos
        $tipoGenero = $this->getEnumValues('genero', 'genero'); // Por ejemplo, campo status de la tabla users
        $estadoCivil = $this->getEnumValues('estado_civil', 'estado_civil'); // Trae los valores tipo ENUM de la tabla estado_civil
        $tipoSangre = $this->getEnumValues('sangre', 'sangre'); //Trae los valores tipo ENUM del campo sangre, de la tabla sangre
        $tipoParentesco = $this->getEnumValues('familiares','parentesco'); //Trae los valores tipo ENUM del campo parentesco de la tabla de familiares

        //Para retornar los datos a la vista:
        return view('rrhh.createtrabajadores', compact ('tipoGenero','estadoCivil','tipoSangre','tipoParentesco'));
    }

    public function store(Request $request){
        $trabajador = request()->all();
        return response()->json($trabajador);
        
    }

}
