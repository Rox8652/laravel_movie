<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Movies;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->word(),
            "genre" => $this->faker->word(),
            "director" => $this->faker->name(),
            "year" => $this->faker->year(),
            "actor_id" => $this->faker->numberBetween(1, 100),
        ];
    }
}
