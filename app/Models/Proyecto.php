<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    //protected $table ='proyectos';
    protected $fillable = ['id_itc', 'nombre_proy', 'reg_patronal', 'categoria_laboral', 'cp', 'pais', 'estado', 'ciudad', 'colonia', 'calle', 'numero_ext', 'numero_int', 'fecha_inicio', 'fecha_fin', 'monto_contrato', 'comentarios'];
    
    public function trabajadores(){
        return $this->belongsTo(Trabajador::class,'proyecto_id','id_itc');
    }

    //Companias en la escala de prioridad va primero, por eso la FK no debe de ir en el modelo de Proy, debe de estar en el Modelo Companias
    //public function companias(){
    //    return $this->belongsTo(Compania::class, 'companias_id', 'id_compania'); //companias_id: hace referencia a la llave foranea en la table proyectos y 
    //                                                                            //id_compania: hace referencia a la columna en la tabla companias que actua 
                                                                                 //como llave primaria en la relacion.
    public function horario(){
        return $this->hasOne(Horario::class, 'horario_id', 'id');
    }

    public function moneda(){
        return $this->belongsTo(Moneda::class, 'moneda_id', 'id');
    }

    public function regobra(){
        return $this->hasOne(Regobra::class, 'regobra_id', 'reg_obra');
    }

    public function compania(){
        return $this->belongsTo(Compania::class, 'compania_id', 'id_compania');
    }

    public function subproyects(){
        return $this->hasMany(Subproyect::class, 'proyecto_id', 'id_itc');
    }

    public function trabajdores(){
        return $this->hasMany(Trabajador::class, 'proyecto_id', 'id_itc');
    }

    public function regpatronales(){
        return $this->hasMany(Regpatronal::class, 'proyecto_id', 'id_itc');
    }

    public function finiquitos(){
        return $this->hasMany(Finiquito::class, 'proyecto_id', 'id_itc');
    }

}
