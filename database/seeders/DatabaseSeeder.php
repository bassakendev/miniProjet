<?php

namespace Database\Seeders;

// use App\Models\Film;
use App\Models\{Film, Category};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\MbmakerUsersFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        category::factory()
            ->has(Film::factory()->count(5))
            ->count(4)
            ->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
