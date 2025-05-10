<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = 
        [
            [
                "id" => 1,
                "name" => "SHeilla",
                "email" => "she@example.com",
                "messageContent" => "wlowwlwolwolow",
    
              ],
            ];

            Message::insert($data);
    }
}
