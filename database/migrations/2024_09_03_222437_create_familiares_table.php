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
        Schema::create('familiares', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',length:255);
            //$table->string('apellido_pat',length:100);
            //$table->string('apellido_mat',length:100);
            $table->biginteger('telefono');
            $table->enum('parentesco',['Madre', 'Padre', 'Esposo(a)','Hermano(a)','Hijo(a)','Abuelo(a)','Amigo(a)','Concubino(a)','Cuñado(a)','Primo(a)','Sobrino(a)','Tío(a)']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familiares');
    }
};
