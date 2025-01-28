<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Entrada;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Andrés González',
            'email' => 'test@example.com',
        ]);

        Entrada::factory(200)->create();
    }
}
