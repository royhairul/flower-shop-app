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
        Flower::create([
            'name' => 'Mawar Merah',
            'price' => 10000,
            'stock' => 10,
            'category' => 'Bunga Potong'
        ]);
    }
}