<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasTable('ventas')) {
            Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_empleado');
            $table->unsignedBigInteger('MetodoPagoID');
            $table->date('FechaDeVenta');
            $table->decimal('TotalConDescuento', 10, 2);
            $table->softDeletes();
            $table->timestamps();


            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};

