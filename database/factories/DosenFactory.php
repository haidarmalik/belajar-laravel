<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'nip' => fake()->randomNumber(),
            'kelamin' => fake()->randomElement(['laki-laki', 'perempuan']),
            'menikah' => fake()->boolean(),
            'alamat' => fake()->address(),
            'created_at' => now()

        ];
    }
}
