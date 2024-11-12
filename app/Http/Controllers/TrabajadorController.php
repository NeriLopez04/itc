<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Reuest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrabajadorController extends Controller
//Controlador que redirige a la vista del modulo de Listado de trabajadores

{
    public function index() {
        $trabajadores = Trabajador::all();
        return view ('rrhh.trabajadores.index',['trabajadores'=>$trabajadores]);
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
        $tipoGenero = $this->getEnumValues('generos', 'genero'); // Por ejemplo, campo status de la tabla users
        $estadoCivil = $this->getEnumValues('estadociviles', 'estados_civiles'); // Trae los valores tipo ENUM de la tabla estado_civil
        $tipoSangre = $this->getEnumValues('sangres', 'sangre'); //Trae los valores tipo ENUM del campo sangre, de la tabla sangre
        $tipoParentesco = $this->getEnumValues('familiares','parentesco'); //Trae los valores tipo ENUM del campo parentesco de la tabla de familiares

        //Para retornar los datos a la vista:
        return view('rrhh.trabajadores.create', compact ('tipoGenero','estadoCivil','tipoSangre','tipoParentesco'));
    }

    public function store(Request $request){
        //$trabajadores = request()->all();
        //return response()->json($trabajadores);
        $request->validate([
            'nombre_trabajador'=> 'required',
            'fecha_naci'=> 'required',
            'numero_seguro' => 'required',
            'rfc' => 'required',
            'curp' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'cp' => 'required',
            'calle' => 'required',
            'numero_ext' => 'required',
        ]);
        
        $trabajador = new Trabajador();
        $trabajador->nombre_trabajador = $request->nombre_trabajador;
        $trabajador->fecha_naci = $request->fecha_naci;
        $trabajador->numero_seguro = $request->numero_seguro;
        $trabajador->rfc = $request->rfc;
        $trabajador->curp = $request->curp;
        $trabajador->telefono = $request->telefono;
        $trabajador->correo = $request->correo;
        $trabajador->cp = $request->cp;
        $trabajador->calle = $request->calle;
        $trabajador->numero_ext = $request->numero_ext;
        $trabajador->save();
    }

}
