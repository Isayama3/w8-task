<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 1, 100), // Random price between 1 and 100
            'discountPercentage' => $this->faker->randomFloat(2, 0, 50), // Random discount percentage
            'rating' => $this->faker->randomFloat(2, 0, 5), // Random rating between 0 and 5
            'stock' => $this->faker->numberBetween(0, 100), // Random stock quantity
            'brand' => $this->faker->word(),
            'sku' => $this->faker->unique()->word(), // Unique SKU
            'warrantyInformation' => $this->faker->sentence(),
            'shippingInformation' => $this->faker->sentence(),
            'availabilityStatus' => $this->faker->word(),
            'returnPolicy' => $this->faker->text(),
            'minimumOrderQuantity' => $this->faker->numberBetween(1, 10), // Random minimum order quantity
            'thumbnail' => $this->faker->imageUrl(640, 480, 'products'), // Random image URL
        ];
    }
}
