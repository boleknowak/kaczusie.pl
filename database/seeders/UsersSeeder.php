<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('test12345'),
        ]);

        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => Hash::make('test12345'),
            ]);
        }
    }
}
