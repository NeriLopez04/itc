<?php

namespace Database\Seeders;

use App\Models\Estadocivil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoscivilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creacion de los Estados Civiles segun el valor del campo ENUM

        Estadocivil::create(['estados_civiles' => 'Soltero(a)']);
        Estadocivil::create(['estados_civiles' => 'Casado(a)']);
        Estadocivil::create(['estados_civiles' => 'Divorciado(a)']);
        Estadocivil::create(['estados_civiles' => 'Viudo(a)']);
        Estadocivil::create(['estados_civiles' => 'Separado(a)']);
        Estadocivil::create(['estados_civiles' => 'Union Libre']);

    }
}
