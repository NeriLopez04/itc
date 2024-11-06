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
        Schema::create('subproyectos', function (Blueprint $table) {
            $table->id();
            $table->string('name_subproyect');

            $table->string('proyecto_id')->nullable();
            $table->foreign('proyecto_id')->references('id_itc')->on('proyectos')->onDelete('set null')->onUpdate('cascade');//Llave foranea de Proyectos

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subproyectos');
    }
};
