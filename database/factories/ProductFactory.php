<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1,5),
            'name' => $this->faker->name,
            'price' => $this->faker->randomNumber(5, true),
            'stock' => mt_rand(10,100)
        ];
    }
}
