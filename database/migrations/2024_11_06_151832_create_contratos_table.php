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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('id_contrato')->unique(); //Id Compuesto con el ID del trabajador y numero de contrato que lleva
            $table->string('apoderado');
            $table->string('testigo');
            $table->string('testigo2');
            $table->date('fecha_contrato');
            $table->integer('dias_contrato');
            $table->date('fin_contrato');

            $table->string('trabajador_id');
            $table->foreign('trabajador_id')->references('id_itc')->on('trabajadores')->onDelete('cascade')->onUpdate('cascade'); //Llave forane de trabajadores

            $table->string('proyecto_id');
            $table->foreign('proyecto_id')->references('id_itc')->on('proyectos')->onDelete('cascade')->onUpdate('cascade'); //Llave foranea de Proyectos
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
