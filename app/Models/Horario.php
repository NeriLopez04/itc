<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $table = 'horarios';

    public function proyecto(){
        return $this->belongsTo(Proyecto::class, 'horario_id','id');
    }

    public function trabajadores(){
        return $this->hasMany(Trabajador::class, 'horario_id','id');
    }

}
