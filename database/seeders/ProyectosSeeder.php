<?php

namespace Database\Seeders;

use App\Models\Proyecto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Datos de ejemplo para llenado de tabla trabajadores
        Proyecto::create(['nombre_proy' => 'CCC Valladolid']);
        Proyecto::create(['nombre_proy' => 'Oficina Central']);


    }
}
