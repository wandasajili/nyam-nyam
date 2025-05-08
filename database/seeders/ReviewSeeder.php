<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id" => 1,
                "name" => "Kang Dede",
                "review_text" => "Is this seriously that price? I think it's cheap because it tastes really good, I swear it's not a lie😭",
           
              ],
              [
                "id" => 2,
                "name" => "Risnawati",
                "review_text" => "Ulva chips are really delicious, I don't regret buying 2, I'm addicted, next time I want to buy another variant💗🥰",
                
              ],
              [
                "id" => 3,
                "name" => "Caca\r\n",
                "review_text" => "Acaaa really likes the original Ulva, the seaweed is really tasty, it's the best, really🤤",
           
              ],
              [
                "id" => 4,
                "name" => "Nira",
                "review_text" => "It's really suitable as my diet snack, because I'm reducing my consumption of oily snacks, thank you.🤗",
            
              ],
        ];

        Review::insert($data);
    }
}
