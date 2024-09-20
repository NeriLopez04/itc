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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->time('entrada');
            $table->time('salida');
            $table->time('inicio_descanso');
            $table->time('fin_descanso');
            $table->boolean('dia_descanso');
            $table->integer('h_normal');
            $table->integer('h_extra');
            $table->integer('h_totales');
            $table->text('observs');
            $table->boolean('falta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
