<?php

namespace Database\Factories;

use App\Models\ProductDimension;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDimensionFactory extends Factory
{
    protected $model = ProductDimension::class;

    public function definition()
    {
        return [
            'weight' => $this->faker->randomFloat(2, 0, 100),
            'width' => $this->faker->randomFloat(2, 0, 100),
            'height' => $this->faker->randomFloat(2, 0, 100),
            'depth' => $this->faker->randomFloat(2, 0, 100),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}
