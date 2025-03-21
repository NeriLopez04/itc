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
        Schema::create('estadociviles', function (Blueprint $table) {
            $table->id();
            $table->enum('estados_civiles',['Soltero(a)', 'Casado(a)', 'Divorciado(a)','Viudo(a)','Separado(a)','Union Libre']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estadociviles');
    }
};
