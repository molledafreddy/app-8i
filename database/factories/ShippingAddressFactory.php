<?php

namespace Database\Factories;

use App\Models\ShippingAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShippingAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'direction' => $this->faker->streetName,
            'department' => $this->faker->buildingNumber,
            'number' => $this->faker->buildingNumber,
            'commune' => $this->faker->city,
            'region' => $this->faker->state,
            'order_id' => \App\Models\Order::inRandomOrder()->first()
        ];
    }
}
