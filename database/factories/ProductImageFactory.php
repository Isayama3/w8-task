<?php

namespace Database\Factories;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    protected $model = ProductImage::class;

    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'products'),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}
