<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run()
    {
        About::create([
            'title' => 'About Me',
            'description' => 'I am a passionate web developer with experience in building modern websites.',
            'birthday' => '2000-01-01',
            'website' => 'https://example.com',
            'phone' => '1234567890',
            'city' => 'Jakarta',
            'age' => 25, // ✅ pakai angka, bukan string
            'degree' => 'Bachelor',
            'email' => 'me@example.com',
            'freelance' => 'Available',
            'profile_image' => null // ✅ null biar aman kalau file belum ada
        ]);
    }
}
