<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sangre extends Model
{
    use HasFactory;

    protected $table = 'sangres';


    public function trabajadores(){
        return $this->hasMany(Trabajador::class,'sangre_id', 'id');
    }

}
