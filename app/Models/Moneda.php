<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    use HasFactory;

    protected $fillable = ['coin','conversion'];

    // Casts para asegurar que 'conversion' sea un decimal
    protected $casts=['conversion'=>'decimal:2',]; //Asegura que tenga 2 decimales

    public function proyecto(){
        return $this->hasMany(Proyecto::class, 'moneda_id','id'); //Relacion de inversa de 1:1 con proyectos 
    }

}
