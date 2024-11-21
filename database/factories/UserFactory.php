<?php

namespace Database\Factories;

use App\Enums\EmployeePositions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => 'Pass@123',
            'role' => 'employee',
            'position' => fake()->randomElement(EmployeePositions::cases()),
            'image' => '',
            'remember_token' => Str::random(10),
        ];
    }

    public function admin(): static
    {
        return $this->state([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin@123',
            'role' => 'admin',
        ]);
    }
}
