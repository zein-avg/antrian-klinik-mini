<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Admin Klinik',
            'email' => 'admin@klinik.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        // Regular user
        User::create([
            'name' => 'User Test',
            'email' => 'user@klinik.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);

        // Additional test users
        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);

        User::create([
            'name' => 'Siti Aminah',
            'email' => 'siti@example.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
    }
}