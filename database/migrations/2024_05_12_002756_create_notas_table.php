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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->unsignedBigInteger('Autor_id'); // Columna para la clave externa
            $table->foreign('Autor_id')->references('id')->on('autores');
            $table->string('contenido');
            $table->unsignedBigInteger('Clasificacion_id'); // Columna para la clave externa
            $table->foreign('Clasificacion_id')->references('id')->on('clasificaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
