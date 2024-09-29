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
        Schema::create('products',function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->decimal('price', 8, 2);
            $table->decimal('discountPercentage', 5, 2);
            $table->decimal('rating', 3, 2);
            $table->integer('stock');
            $table->string('brand')->nullable();
            $table->string('sku');
            $table->string('warrantyInformation');
            $table->string('shippingInformation');
            $table->string('availabilityStatus');
            $table->text('returnPolicy');
            $table->integer('minimumOrderQuantity');
            $table->string('thumbnail');
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
