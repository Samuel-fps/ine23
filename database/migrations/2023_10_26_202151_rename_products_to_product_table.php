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
        Schema::rename('products', 'product');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // En la migración de reversión, puedes cambiar el nombre nuevamente si es necesario.
        Schema::rename('product', 'products');
    }
};
