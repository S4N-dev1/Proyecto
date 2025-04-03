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
        if (!Schema::hasTable('personas')) {
            Schema::create('personas', function (Blueprint $table) {
                $table->id('id_persona'); // Columna id_personas como clave primaria
                $table->string('Nombre', 10); // Columna Nombre con longitud máxima de 10 caracteres
                $table->string('ap', 10); // Columna apellido paterno
                $table->string('am', 10); // Columna apellido materno
                $table->softDeletes();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas'); // Elimina la tabla personas

    }
};
