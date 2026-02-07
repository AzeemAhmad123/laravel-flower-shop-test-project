<?php

namespace Database\Seeders;

use App\Models\Flower;
use Illuminate\Database\Seeder;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flowers = [
            [
                'name' => 'Red Roses Bouquet',
                'description' => 'Beautiful red roses perfect for expressing love',
                'price' => 29.99,
                'quantity' => 50,
                'category' => 'Roses',
            ],
            [
                'name' => 'Sunflower Arrangement',
                'description' => 'Bright and cheerful sunflowers',
                'price' => 24.99,
                'quantity' => 30,
                'category' => 'Sunflowers',
            ],
            [
                'name' => 'Lily Bouquet',
                'description' => 'Elegant white lilies',
                'price' => 34.99,
                'quantity' => 25,
                'category' => 'Lilies',
            ],
            [
                'name' => 'Tulip Mix',
                'description' => 'Colorful mix of tulips',
                'price' => 19.99,
                'quantity' => 40,
                'category' => 'Tulips',
            ],
            [
                'name' => 'Orchid Plant',
                'description' => 'Exotic purple orchid',
                'price' => 39.99,
                'quantity' => 15,
                'category' => 'Orchids',
            ],
        ];

        foreach ($flowers as $flower) {
            Flower::create($flower);
        }
    }
}
