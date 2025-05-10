<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id" => 1,
                "name" => "Raos Ulva Chips",
                "description" => "Raos Ulva Chips adalah jajanan ringan berbahan dasar rumput laut Ulva, yaitu jenis rumput laut hijau yang kaya akan nutrisi. Produk ini menghadirkan rasa gurih dan renyah khas laut yang unik, cocok dinikmati sebagai camilan sehat sehari-hari.",
                "price" => 15000,
                "stock" => 1000,
                "image" => "p1.png",
            
              ],
              [
                "id" => 2,
                "name" => "Totoka Ulva Chips",
                "description" => "Totoka Ulva Chips adalah jajanan ringan berbahan dasar rumput laut Ulva, yaitu jenis rumput laut hijau yang kaya akan nutrisi. Produk ini menghadirkan rasa gurih dan renyah khas laut yang unik, cocok dinikmati sebagai camilan sehat sehari-hari.",
                "price" => 15000,
                "stock" => 1000,
                "image" => "p2.png",
           
              ],
              [
                "id" => 16,
                "name" => "Origi Ulva Chips",
                "description" => "Origi Ulva Chips adalah jajanan ringan berbahan dasar rumput laut Ulva, yaitu jenis rumput laut hijau yang kaya akan nutrisi. Produk ini menghadirkan rasa gurih dan renyah khas laut yang unik, cocok dinikmati sebagai camilan sehat sehari-hari.",
                "price" => 15000,
                "stock" => 1000,
                "image" => "1746695341.png",
           
              ],
              [
                "id" => 17,
                "name" => "Nikimawon Ulva Chips",
                "description" => "Nikimawon Ulva Chips adalah jajanan ringan berbahan dasar rumput laut Ulva, yaitu jenis rumput laut hijau yang kaya akan nutrisi. Produk ini menghadirkan rasa gurih dan renyah khas laut yang unik, cocok dinikmati sebagai camilan sehat sehari-hari.",
                "price" => 15000,
                "stock" => 1000,
                "image" => "1746695377.png",
            
              ],
        ];

        Menu::insert($data);
    }
}
