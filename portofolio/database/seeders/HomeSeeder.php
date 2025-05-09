<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create([
            'title' => 'Welcome to My Portfolio',
            'subtitle' => 'I am a web developer',
            'hero_image' => 'default.jpg',
        ]);
    }
}
