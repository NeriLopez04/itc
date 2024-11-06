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
            $table->biginteger('telefono2')->nullable(true);
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
            $table->integer('edad')->nullable(true);
            //$table->boolean('status');

            //$table->unsignedBigInteger('familiares_id');    //
            //$table->foreign('familiares_id')->references('id')->on('familiares')->onDelete('cascade')->onUpdate('cascade'); //Llave foranea de la tabla de familiares

            $table->unsignedBigInteger('estadocivil_id');
            $table->foreign('estadocivil_id')->references('id')->on('estadociviles')->onDelete('cascade')->onUpdate('cascade');//Llave foranea de la tabla de Estado Civil

            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade')->onUpdate('cascade');//Llave foranea de la tabla de Generos

            $table->unsignedBigInteger('sangre_id');
            $table->foreign('sangre_id')->references('id')->on('sangres')->onDelete('cascade')->onUpdate('cascade'); //Llave foranea de la tabla de Sangre

            $table->unsignedBigInteger('departamento_id');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade')->onUpdate('cascade'); //Llave foranea de la  tabla de Departamentos

            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');//Llave foranea de la tabla de categorias

            $table->unsignedBigInteger('credito_id');
            $table->foreign('credito_id')->references('id')->on('creditos')->onDelete('cascade')->onUpdate('cascade');//Lave foranea de la tabla de Creditos

            $table->string('proyecto_id'); //No sigue la convencional
            $table->foreign('proyecto_id')->references('id_itc')->on('proyectos')->onDelete('cascade')->onUpdate('cascade'); //Llave foranea de la tabla de Proyecto
            
            $table->unsignedBigInteger('horario_id')->nullable();
            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('set null')->onUpdate('cascade');//Llave foranea de la tabla Horarios

            //CUANDO LA RELACION ES DE 1 A MUCHOS O LO CONTRARIO, LA LLAVE FORANEA SIEMPRE VA EN LA TABLA QUE TIENE LA RELACION DE MUCHOS (LA QUE TIENE
            //MUCHOS REGISTROS)
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
