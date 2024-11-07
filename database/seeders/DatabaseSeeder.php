<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sangre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            EstadoscivilesSeeder::class,
            GenerosSeeder::class,
            SangresSeeder::class,
            DepartamentosSeeder::class,
            CategoriasSeeder::class,
            CreditosSeeder::class,
            ProyectosSeeder::class,
            HorariosSeeder::class,
            TrabajadorSeeder::class,
            UserSeeder::class,
        ]);
    }
}
