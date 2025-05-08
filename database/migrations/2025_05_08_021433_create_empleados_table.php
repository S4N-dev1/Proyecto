<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasTable('empleados')) {
            Schema::create('empleados', function (Blueprint $table) {
            $table->id('id_empleado');
            $table->unsignedBigInteger('id_persona');
            $table->string('departamento', 50);
            $table->decimal('salario', 10, 2);
            $table->date('fechaContratacion');
            $table->softDeletes();
            $table->timestamps();


            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};

