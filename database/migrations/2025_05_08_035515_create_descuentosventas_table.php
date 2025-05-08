<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasTable('descuentosventas')) {
            Schema::create('descuentosventas', function (Blueprint $table) {
            $table->id('id_descuentoventa');
            $table->unsignedBigInteger('id_venta');
            $table->unsignedBigInteger('DescuentoID');
            $table->softDeletes();
            $table->timestamps();


            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('descuentosventas');
    }
};

