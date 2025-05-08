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
        $data = [
            [
                "id" => 13,
                "name" => "admin",
                "email" => "nyam@nyam.com",
                "email_verified_at" => null,
                "password" => '$2y$12$wn9wXRq1aq1Lz1QfqWM4uO44fJSYoOKOdyAnpHoczclbGwxU0KF..',
                "remember_token" => null,
             
              ],
        ];

        User::insert($data);
    }
}
