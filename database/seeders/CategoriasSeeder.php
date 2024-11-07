<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Categorias ejemplos
        Categoria::create(['category' => 'director']);
        Categoria::create(['category' => 'gerente']);
        Categoria::create(['category' => 'auxiliar']);


    }
}
