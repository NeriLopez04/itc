<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finiquito extends Model
{
    use HasFactory;

    protected $table = 'finiquitos';


    //Relacion de muchos a uno de Trabajadores
    //Relac

    //Relacion de uno a muchos (inversa): Muchos finiquitos le pertenecen a 1 trabajador 
    public function trabajador(){
        return $this->belongsTo(Trabajador::class, 'trabajador_id', 'id_itc');
    }

    public function proyecto(){
        return $this->belongsTo(Proyecto::class, 'proyecto_id', 'id_itc');
    }

    public function compania(){
        return $this->belongsTo(Compania::class, 'compania_id', 'id_compania');
    }

}
