<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discussion>
 */
class DiscussionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user1 = User::inRandomOrder()->first();
        $user2 = User::where('id', '!=', $user1->id)->inRandomOrder()->first();

        return [
            'user1_id' => $user1->id ?? null,
            'user2_id' => $user2->id ?? null,
        ];
    }
}
