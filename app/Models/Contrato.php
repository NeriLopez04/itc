<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrato extends Model
{
    use HasFactory;

    protected $table = 'contratos';

    //Relacion de 1 a Muchos (inversa): Muchos contratos le pertencen a 1 Trabajador
    public function trabajador(){
        return $this->belongsTo(Trabajador::class,'trabajador_id', 'id_itc');
    }

    public function finiquito(){
        return $this->hasOne(Finiquito::class, 'contrato_id', 'id_contrato');
    }

    public function contrato(){
        return $this->belongsTo(Contrato::class, 'contrato_id', 'id_contrato');
    }

    
    //Relacion de muchos a 1 M:1
    //Muchos contratos son de un solo trabajador

}
