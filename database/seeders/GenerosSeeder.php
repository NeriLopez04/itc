<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creacion de los tipos de Genero segun el valor del campo ENUM

        Genero::create(['genero' => 'Masculino']);
        Genero::create(['genero' => 'Femenino']);

    }
}
