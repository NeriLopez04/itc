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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_proy', length:255);
            $table->string('id_itc',length:100)->unique();
            $table->string('calle',length:255);
            $table->string('colonia', length:255);
            $table->integer('numero_int');
            $table->integer('numero_ext');
            $table->integer('cp');
            $table->string('estado',length:100);
            $table->string('ciudad',length:100);
            $table->string('pais',length:100);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->biginteger('monto_contrato');
            $table->text('comentarios');
            $table->text('categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
