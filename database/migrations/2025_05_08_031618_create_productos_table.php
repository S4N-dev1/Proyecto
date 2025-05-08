<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasTable('productos')) {
            Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->unsignedBigInteger('id_provedor');
            $table->string('nombre', 100);
            $table->string('codigobarras', 50);
            $table->string('descripcion', 255);
            $table->decimal('precio', 10, 2);
            $table->integer('existencias');
            $table->softDeletes();
            $table->timestamps();


            });
        }
    }
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

