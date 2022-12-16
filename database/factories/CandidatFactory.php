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
            'projet' => $this->faker->name(),
            'categorie' => rand(1, 10),
            'vpro' => 0,
            'vjury' => 0,
            'vpublic' => 0,
            'total' => 0,
        ];
    }
}
