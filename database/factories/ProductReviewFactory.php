<?php


namespace Database\Factories;

use App\Models\ProductReview;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductReviewFactory extends Factory
{
    protected $model = ProductReview::class;

    public function definition()
    {
        return [
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->text(),
            'reviewerName' => $this->faker->name(),
            'reviewerEmail' => $this->faker->unique()->safeEmail(),
            'date' => now()->toISOString(),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}
