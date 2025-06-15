<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test Admin',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // ganti dengan hash sesuai keamanan
            'remember_token' => Str::random(10),
        ]);
    }
}
