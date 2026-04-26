<?php

namespace Database\Factories;

use App\Models\FormData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FormData>
 */
class FormDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->username(),
            'password_hash' => bcrypt('password'),
        ];
    }
}
