<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->title,
            'description' => $this->faker->paragraph(4),
            'discount' => rand(50, 80),
            'total' => rand(500, 8000),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
