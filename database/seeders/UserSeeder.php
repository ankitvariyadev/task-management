<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->admin()->create();

        User::factory()
            ->count(30)
            ->sequence(
                fn ($sequence) => [
                    'email' => 'employee'.($sequence->index + 1).'@gmail.com',
                    'password' => 'user@123',
                ]
            )
            ->create();
    }
}
