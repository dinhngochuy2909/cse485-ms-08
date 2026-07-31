<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'sku' => $this->faker->unique()->bothify('SP-####'),
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->numberBetween(100000, 9000000),
            'qty' => $this->faker->numberBetween(1, 15),
            'description' => $this->faker->sentence(),
        ];
    }
}