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
            $table->string('id_itc', length:100)->unique();
            $table->string('nombre_proy', length:255);
            $table->string('reg_patronal', length:100);             
            $table->string('categoria_laboral', length:255);
            $table->integer('cp');
            $table->string('pais');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('colonia');
            $table->string('calle', length:255);
            $table->integer('numero_ext');
            $table->integer('numero_int');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('monto_contrato',10,2);
            $table->text('comentarios');
            $table->unsignedBigInteger('horario_id');
            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('cascade')->onUpdate('cascade'); //Llave foranea de la tabla de horarios
            $table->unsignedBigInteger('moneda_id');
            $table->foreign('moneda_id')->references('id')->on('monedas')->onDelete('cascade')->onUpdate('cascade');//restrict por si hay mas registros vinvulados, no se borren
                                                                                                //todos. Si el programa detecta que hay registros ligados, 
                                                                                                //no deja eliminar? Validar.

            $table->string('regobra_id')->nullable();
            $table->foreign('regobra_id')->references('reg_obra')->on('regobras')->onDelete('set null')->onUpdate('cascade');

            $table->string('compania_id')->nullable();
            $table->foreign('compania_id')->references('id_compania')->on('companias')->onDelete('set null')->onUpdate('cascade');
            
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
