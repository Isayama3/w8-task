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
        Schema::create('product_reviews',function(Blueprint $table){
            $table->increments('id');
            $table->tinyInteger('rating');
            $table->string('comment');
            $table->string('reviewerName');
            $table->string('reviewerEmail');
            $table->string('date');
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
        Schema::dropIfExists('products');
    }
};
