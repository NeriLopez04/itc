<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creacion de departamentos

        Departamento::create(['departament' => 'Direccion']);
        Departamento::create(['departament' => 'Administracion']);
        Departamento::create(['departament' => 'Calidad']);
        Departamento::create(['departament' => 'Seguridad']);
        Departamento::create(['departament' => 'Procura y Logistica']);
        Departamento::create(['departament' => 'Mantenimiento']);
    }
}
