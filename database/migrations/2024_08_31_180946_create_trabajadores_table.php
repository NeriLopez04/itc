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
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();
            $table->string('id_itc', length: 255)->unique();
            $table->string('nombre_trabajador', length:100);
            //$table->string('apellido_paterno', length:100);
            //$table->string('apellido_materno', length:100);
            $table->biginteger('numero_seguro')->unique();
            $table->string('rfc', length:13)->unique();
            $table->string('curp', length:18)->unique();
            $table->biginteger('telefono');
            $table->bigInteger('telefono2')->nullable(true);
            $table->string('correo')->unique();
            $table->string('calle', length:255);
            $table->string('numero_ext', length:8);
            $table->string('numero_int', length:8);
            $table->integer('cp');
            $table->string('colonia', length:255);
            $table->string('estado', length:100);
            $table->string('ciudad', length:100);
            $table->string('pais', length:100);
            $table->boolean('black_list');
            $table->text('foto');
            $table->date('fecha_naci')->nullable(true);
           // $table->boolean('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadores');
    }
};
