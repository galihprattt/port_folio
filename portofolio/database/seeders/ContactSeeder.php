<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Contact::create([
            'address' => 'Jl. Contoh No.123',
            'email' => 'email@example.com',
            'phone' => '08123456789',
        ]);
    }
}
