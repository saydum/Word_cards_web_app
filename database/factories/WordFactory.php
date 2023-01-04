<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WordFactory extends Factory
{
    public function definition()
    {
        return [
            'value' => fake()->word(),
            'translate' => fake()->word(),
            'card_id' => 18
        ];
    }
}
