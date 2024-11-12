<?php

namespace App\Http\Controllers;

use App\Models\Compania;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CompaniaController extends Controller
{
    //Controlador para agregar y ver listado de los Proveedores
    public function index(){
        return view('prm.compania.index');
    }


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
        $tipoCompania = $this->getEnumValues('companias', 'compania'); // Por ejemplo, campo compania de la tabla Companias

        //Para retornar los datos a la vista:
        return view('prm.compania.create', compact ('tipoCompania'));
    }

}
