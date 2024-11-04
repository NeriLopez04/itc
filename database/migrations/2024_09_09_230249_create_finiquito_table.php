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
        Schema::create('finiquito', function (Blueprint $table) {
            $table->id();
            $table->string('num_finiquito')->unique(); //id
            $table->date('fecha_creacion');
            $table->integer('dias_aginaldo');
            $table->integer('dias_vacaciones');
            $table->integer('prima_antiguedad');
            $table->float('prima_vacacional');
            $table->integer('gratificacion');
            $table->integer('total_percep');
            $table->text('observ');
            $table->integer('ispt_reten');
            $table->integer('credito_salario');
            $table->integer('deduccion');
            $table->integer('pago_neto');

            $table->string('trabajador_id')->nullable();
            $table->foreign('trabajador_id')->references('id_itc')->on('trabajadores')->onDelete('null')->onUpdate('cascade');

            $table->string('contrato_id');
            $table->foreign('contrato_id')->references('id_contrato')->on('contratos')->onUpdate('cascade')->onDelete('restict');

            $table->string('compania_id')->nullable();
            $table->foreign('compania_id')->references('id_compania')->on('compania')->onDelete('set null')->onUpdate('cascade');//Llave foranea de Companias

            $table->string('proyecto_id')->nullable();
            $table->foreign('proyecto_id')->references('id_itc')->on('proyectps')->onDelete('set null')->onUpdate('cascade');//Llave foranea de la tabla Proyectos

            
            //Relacion de 1:1. ej. Un usuario tiene un solo Perfil
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finiquito');
    }
};
