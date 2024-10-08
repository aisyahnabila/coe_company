<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => Hash::make('admin'), // Ganti dengan password yang diinginkan
        ]);
        User::create([
            'name' => 'nabila',
            'email' => 'nabila@admin',
            'password' => Hash::make('nabila'), // Ganti dengan password yang diinginkan
        ]);
    }
}
