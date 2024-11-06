<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subproyect extends Model
{
    use HasFactory;

    protected $table = 'subproyects';

    public function proyecto(){
        return $this->belongsTo(Proyecto::class, 'proyecto_id', 'id_itc');
    }

    public function regpatronales(){
        return $this->hasMany(Regpatronal::class, 'subproyecto_id', 'id');
    }

}
