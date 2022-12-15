<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidat>
 */
class CandidatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'photo' => $this->faker->name(),
            'categorie' => rand(1, 10),
            'vpro' => rand(1, 10),
            'vjury' => rand(1, 10),
            'vpublic' => rand(1, 10),
            'total' => rand(1, 10),
            'classement' => rand(1, 10),
        ];
    }
}
