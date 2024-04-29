<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->unique()->sentence(),
            'soustitre' => $this->faker->unique()->sentence(),
            'contenu' => $this->faker->unique()->paragraph(),
            'auteur' => $this->faker->name(),
            'ecritle' => now(),
        ];
    }
}
