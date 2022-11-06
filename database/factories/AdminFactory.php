<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$l2/NR.C9FVhK0VFpdcF8YuhdcJWa.Wqm2Lvieq48lxjTj3WxCdACq', // 123456
            'remember_token' => Str::random(10),
        ];
    }
}
