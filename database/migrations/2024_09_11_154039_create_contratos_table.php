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
            $table->string('id_contrato');
            $table->string('apoderado');
            $table->string('testigo');
            $table->string('testigo2');
            $table->date('fecha_contrato');
            $table->integer('dias_contrato');
            $table->date('fin_contrato');
            $table->integer('sueldo');
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
