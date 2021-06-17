<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique(true)->title,
            // 'price' => $this->faker->unique(true)->numberBetween (1, 5000),

            'description' => $this->faker->paragraph(4),
            'stock' => rand(20, 30),
            'price' => $this->faker->randomFloat(2, 10, 50),
            'isPublic' => $this->faker->boolean
        ];
    }
}
