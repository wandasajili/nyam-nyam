<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Panggil semua seeder di sini
        $this->call([
            UserSeeder::class,
            MenuSeeder::class,
            TeamSeeder::class,
            ReviewSeeder::class,
            MessageSeeder::class,
        ]);
    }
}