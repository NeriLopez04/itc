<?php

namespace Database\Seeders;

use App\Models\Credito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreditosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Datos de ejemplo
        Credito::create(['credito' => '1']);
        Credito::create(['credito' => '0']);
    }
}
