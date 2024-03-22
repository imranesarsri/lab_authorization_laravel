<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0626156115',
            'password' => 'adminadmin',
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'imrane',
            'email' => 'imrane@gmail.com',
            'phone' => '0607080910',
            'password' => 'imraneimrane',
            'role' => 'user'
        ]);
    }
}