<?php


namespace Database\Factories;

use App\Models\ProductTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductTagFactory extends Factory
{
    protected $model = ProductTag::class;

    public function definition()
    {
        return [
            'tag' => $this->faker->word(),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}
