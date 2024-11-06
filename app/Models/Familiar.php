<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    use HasFactory;

    protected $table ='familiares';


    public function trabajador(){
        return $this->belongsTo(Trabajador::class, 'trabajador_id', 'id_itc');
    }

}
