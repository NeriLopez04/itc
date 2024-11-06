<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    use HasFactory;

    protected $table = 'creditos';

    public function trabajadores(){
        return $this->hasMany(Trabajador::class,'credit_id', 'id');
    }

}
