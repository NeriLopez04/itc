<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regpatronal extends Model
{
    use HasFactory;

    protected $table = 'regpatronales';

    public function proyecto(){
        return $this->belongsTo(Proyecto::class, 'proyecto_id', 'id_itc');
    }

    public function subproyect(){
        return $this->belongsTo(Subproyect::class, 'subproyecto_id', 'id');
    }

}
