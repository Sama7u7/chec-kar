<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Usuario Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => bcrypt('pass'),
        ]);
                User::factory()->create([
            'name' => 'Usuario',
            'email' => 'user@example.com',
            'role' => 'user',
            'password' => bcrypt('pass'),
        ]);

    }
}
