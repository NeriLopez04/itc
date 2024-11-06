<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    use HasFactory;

    protected $table = 'companias';

    public function proyectos(){
        return $this->hasMany(Proyecto::class, 'compania_id', 'id_compania');
    }

    public function finiquitos(){
        return $this->hasMany(Finiquito::class, 'compania_id', 'id_compania');
    }

}
