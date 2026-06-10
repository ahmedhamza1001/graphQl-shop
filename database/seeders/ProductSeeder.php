<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'iPhone 16',
            'description' => 'Apple Phone',
            'price' => 1200,
            'stock' => 10,
        ]);

        Product::create([
            'name' => 'AirPods Pro',
            'description' => 'Apple AirPods',
            'price' => 250,
            'stock' => 20,
        ]);
    }
}
