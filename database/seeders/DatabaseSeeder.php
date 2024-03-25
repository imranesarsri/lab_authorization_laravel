<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProjectSeeder::class,
            TaskSeeder::class,
        ]);
        User::create([
            'name' => 'imrane',
            'email' => 'imrane@gmail.com',
            'phone' => '0626156115',
            'password' => 'imraneimrane',
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0600112334',
            'password' => 'adminadmin',
        ]);
    }
}
