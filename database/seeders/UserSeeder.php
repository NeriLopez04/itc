<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'password'=>Hash::make('password'),
        ]);

        User::create([
            'name'=>'Neri Lopez',
            'email'=>'neri.22adidas@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
    }
}