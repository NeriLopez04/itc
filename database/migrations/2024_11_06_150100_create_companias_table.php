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
        Schema::create('companias', function (Blueprint $table) {
            $table->id();

            $table->string('id_compania',length:100)->unique();
            $table->enum('compania',['Cliente','Proveedor']);
            $table->string('nombre');
            $table->integer('cp');
            $table->string('pais');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('colonia');
            $table->string('calle');
            $table->biginteger('numero_ext');
            $table->biginteger('numero_int');
            $table->string('nombre_contacto');
            $table->string('titulo_contacto');
            $table->bigInteger('telefono');
            $table->bigInteger('telefono2');
            $table->string('correo')->unique();
            $table->string('webpage');
            $table->string('contacto_itc');
            $table->string('producto_giro');
            $table->text('observaciones');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companias');
    }
};
