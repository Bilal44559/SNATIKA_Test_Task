<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin', // Change this to your desired name
            'email' => 'admin@gmail.com', // Change this to your desired email
            'password' => Hash::make('12345678'), // Change this to your desired password
            'email_verified_at' => now(),
        ]);
    }
}
