<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Belva Admin',
            'email' => 'dev@belvadigital.com',
            'password' => bcrypt('12345678!'),
            'email_verified_at' => now(),
        ]);
    }
}
