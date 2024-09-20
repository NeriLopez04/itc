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
            $table->string('num_finiquito')->unique();
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
