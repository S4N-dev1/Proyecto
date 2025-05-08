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
                $table->id('id_personas'); // Ajuste en el nombre de la columna
                $table->string('Nombre', 10);
                $table->string('ap', 10);
                $table->string('am', 10);
                $table->string('foto')->nullable(); // Campo para la foto
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
        Schema::dropIfExists('personas');
    }
};
