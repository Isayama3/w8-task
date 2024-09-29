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
        Schema::create('product_dimensions', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('weight', 5, 2);
            $table->decimal('width', 5, 2);
            $table->decimal('height', 5, 2);
            $table->decimal('depth', 5, 2);
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_dimensions');
    }
};
