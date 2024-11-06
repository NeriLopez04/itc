<?php

namespace Database\Seeders;

use App\Models\Sangre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SangresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creacion de tipos de Sangre segun el valor en el campos ENUM

        Sangre::create(['sangre' => 'A+']);
        Sangre::create(['sangre' => 'A-']);
        Sangre::create(['sangre' => 'B+']);
        Sangre::create(['sangre' => 'B-']);
        Sangre::create(['sangre' => 'AB+']);
        Sangre::create(['sangre' => 'AB-']);
        Sangre::create(['sangre' => 'O+']);
        Sangre::create(['sangre' => 'O-']);

    }
}
