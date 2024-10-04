<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Esta Tabla pertenece al tipo de cargo que tiene cada trabajador y estan derivados de la tabla puesto
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->string('id_seq')->unique(true);
            $table->string('cargo')->unique(true);
            $table->string('cargo_ing');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
