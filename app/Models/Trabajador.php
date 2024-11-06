<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $table = 'trabajadores';

    //relacion de muchos a uno  con la tabla familiares
    public function familiar(){
        return $this->hasOne(Familiar::class, 'trabajador_id', 'id_itc');
    }
    //relacion de muchos a uno  con la tabla estadociviles
    public function estadocivil(){
        return $this->belongsTo(Estadocivil::class, 'estado_civil', 'id');
    }
    //relacion de muchos a uno  con la tabla generos
    public function genero(){
        return $this->belongsTo(Genero::class, 'genero_id', 'id');
    }
    //relacion de muchos a uno  con la tabla tiposangres
    public function tipoSangre(){
        return $this->belongsTo(Sangre::class, 'sangre_id', 'id');
    }
    //relacion de muchos a uno  con la tabla departamentos
    public function departamento(){
        return $this->belongsTo(Departamento::class, 'departamento_id','id');
    }
    //relacion de muchos a uno  con la tabla categorias
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria', 'id');
    }
    //relacion de muchos a uno  con la tabla credito
    public function credito(){
        return $this->belongsTo(Credito::class, 'credito_id', 'id');
    }

    public function contratos(){
        return $this->hasMany(Contrato::class, 'trabajador_id', 'id_itc');
    }
    //Relacion de Uno a Muchos con la tabla de Finiquitos
    public function finiquitos(){
        return $this->hasMany(Finiquito::class,'trabajador_id','id_itc');
    }

    public function proyecto(){
        return $this->belongsTo(Proyecto::class,'proyecto_id','id_itc');
    }

    public function horario(){
        return $this->belongsTo(Horario::class, 'horario_id', 'id');
    }

}
