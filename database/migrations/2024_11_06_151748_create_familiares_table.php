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
            $table->string('nombre');
            $table->bigInteger('telefono');
            $table->enum('parentesco',['Madre', 'Padre','Esposo(a)', 'Hermano(a)', 'Hijo(a)', 'Abuelo(a)', 'Amigo(a)','Concubino(a)','Cuñado(a)','Primo(a)','Sobrino(a)','Tío(a)']);
            $table->timestamps();

            $table->string('trabajador_id'); //No sigue el id convencional
            $table->foreign('trabajador_id')->references('id_itc')->on('trabajadores')->onDelete('cascade')->onUpdate('cascade');//Llave foranea de Trabajadores
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
