<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id'=>rand(1,50),
            'item_id'=>rand(1,50),
            'quantity'=>rand(10,100),
            'price'=>rand(50,500),
        ];
    }
}
