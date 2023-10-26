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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description'); // This sets the maximum character limit to 500
            $table->string('imgUrl');
            $table->decimal('price', 8, 2); // 8 digits in total, with 2 after the decimal point
            $table->unsignedTinyInteger('discountPercent')->nullable();
            $table->dateTime('discountStart_at')->nullable();
            $table->dateTime('discountEnd_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
