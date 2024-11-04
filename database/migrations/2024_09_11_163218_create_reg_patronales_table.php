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
        Schema::create('reg_patronales', function (Blueprint $table) {
            $table->id();
            $table->string('reg_patronal')->unique();
            $table->string('nombre_patronal');

            $table->string('proyecto_id');
            $table->foreign('proyecto_id')->references('id_itc')->on('proyectos')->onDelete('set nnull')->onUpdate('cascade');

            $table->unsignedBigInteger('subproyecto_id')->nullable();
            $table->foreign('subproyect_id')->references('id')->on('subproyects')->onDelete('set null')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reg_patronales');
    }
};
