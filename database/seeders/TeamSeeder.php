<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id" => 1,
                "name" => "Rivaldo Carlos",
                "image" => "1746695245.jpg",
                "socialmedia" => "pado_calos",
            
              ],
              [
                "id" => 2,
                "name" => "Wanda Sajili",
                "image" => "wanda.jpg",
                "socialmedia" => "wands_1745",
          
              ],
              [
                "id" => 3,
                "name" => "Arlen Nawang Rachelia",
                "image" => "1746695137.jpg",
                "socialmedia" => "arlennawangrachelia_04",
         
              ],
              [
                "id" => 4,
                "name" => "Arbian Indra Musafak",
                "image" => "beni.jpg",
                "socialmedia" => "arbianindra",
          
              ],
        ];

        Team::insert($data);
    }
}
