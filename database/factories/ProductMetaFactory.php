<?php

namespace Database\Factories;

use App\Models\ProductMeta;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductMetaFactory extends Factory
{
    protected $model = ProductMeta::class;

    public function definition()
    {
        return [
            'barcode' => $this->faker->ean13(),
            'qrCode' => $this->faker->url(),
            'createdAt' => now()->toISOString(),
            'updatedAt' => now()->toISOString(),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}
