<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

 
        $this->call([
            AboutSeeder::class,
            ContactSeeder::class,
            HeroSeeder::class,
            HomeSeeder::class,
        ]);
    }
}
