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
        Schema::create('regpatronales', function (Blueprint $table) {
            $table->id();
            $table->string('reg_patronal')->unique();
            $table->string('nombre_patronal');

            $table->string('proyecto_id')->nullable();
            $table->foreign('proyecto_id')->references('id_itc')->on('proyectos')->onDelete('set null')->onUpdate('cascade'); //Llave foranea de la tabla proyectos

            $table->unsignedBigInteger('subproyect_id')->nullable();
            $table->foreign('subproyect_id')->references('id')->on('subproyects')->onDelete('set null')->onUpdate('cascade');//Llave foranea de la tabla subproyectos

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regpatronales');
    }
};
