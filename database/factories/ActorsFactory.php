<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Actor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ActorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "first_name" => $this->faker->firstName(),
            "last_name" => $this->faker->lastName(),
            "image" => $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
