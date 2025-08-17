<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role'  => 'admin',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'role'  => 'user',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
        ]);
    }
}