<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MbmakerUsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'prenom' => fake()->name(),
            'email' => fake()->safeEmail(),
            'ville' => fake()->randomKey(['Douala', 'Dackar', 'Abbidjan']),
            'pays' => fake()->randomKey(['Cameroun', 'Senegal', 'Cote d\'ivoir']),
            'tel' => fake()->numberBetween(100000000, 999999999),
            'password' => fake()->numberBetween(10000000, 99999999),

        ];
    }
}
