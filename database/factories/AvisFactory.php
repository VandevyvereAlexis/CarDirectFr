<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avis>
 */
class AvisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'commentaire'   => $this->faker->sentence(),
            'note'          => $this->faker->numberBetween(1, 5),
            'user1_id'     => $this->faker->optional()->randomElement(User::pluck('id')->toArray()), 
            'user2_id'     => $this->faker->optional()->randomElement(User::pluck('id')->toArray()),
        ];
    }
}
