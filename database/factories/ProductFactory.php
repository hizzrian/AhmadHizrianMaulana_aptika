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
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'mini_description' => $this->faker->paragraph(),
            // 'description' => $this->faker->paragraphs(mt_rand(5, 10)),
            'description' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                            ->map(fn($p) => '<p>' . $p . '</p>')
                            ->implode(' '),
            'sku' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'discount' => $this->faker->randomFloat(2, 1, 100),
            'discount_price' => $this->faker->randomFloat(2, 1, 100),
            'weight' => $this->faker->randomFloat(2, 1, 100),
            'stock' => $this->faker->numberBetween(1, 100),
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,3),
        ];
    }
}
