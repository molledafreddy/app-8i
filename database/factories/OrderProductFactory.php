<?php

namespace Database\Factories;

use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->unique(true)->numberBetween (1, 5000),
            'quantity' => $this->faker->unique(true)->numberBetween (1, 50),
            'order_id' => \App\Models\Order::factory(),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}
