<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    public function trabajadores(){
        return $this->hasMany(Trabajador::class, 'categoria', 'id');
    }


}
