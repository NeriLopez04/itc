<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'generos';


    public function trabajadores(){
        return $this->hasMany(Trabajador::class, 'genero_id', 'id');
    }

}
