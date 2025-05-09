<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Hero::create([
            'name' => 'John Doe',
            'headline' => 'Welcome to My Portfolio',
            'subheadline' => 'I am a Web Developer',
        ]);
    }
    

}
