<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Flower;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataFlowers = [
            [
                'image' => 'https://i.pinimg.com/736x/f1/61/7f/f1617f0c33b4c1c5b8a997167ce00218.jpg',
                'name' => 'Red Rose',
                'price' => 10000,
                'stock' => 10,
                'category' => 'Wedding Decoration'
            ],
            [
                'image' => 'https://ak1.ostkcdn.com/images/products/is/images/direct/04d262c6e48ceb2bc1e8f32562213f61179d4623/Enova-Home-Large-Artificial-Real-Touch-White-Tulip-Arrangement-in-Clear-Glass-Vase-for-Home-Office-Decoration.jpg?impolicy=medium',
                'name' => 'White Tulip',
                'price' => 15000,
                'stock' => 20,
                'category' => 'Home Decoration'
            ],
            [
                'image' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2022/12/19/4a680550-5faf-4381-93dd-4608c21479c4.jpg',
                'name' => 'Spring Floral',
                'price' => 20000,
                'stock' => 25,
                'category' => 'Bouquet Flower'
            ]
        ];

        Flower::insert($dataFlowers);
    }
}