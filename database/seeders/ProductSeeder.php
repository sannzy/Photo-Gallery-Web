<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Laptop Asus ROG',
            'description' => 'Gaming laptop with high performance',
            'price' => 15000000,
            'stock' => 10
        ]);

        Product::create([
            'name' => 'iPhone 15 Pro',
            'description' => 'Latest Apple smartphone',
            'price' => 20000000,
            'stock' => 5
        ]);

        Product::create([
            'name' => 'Samsung TV 55 inch',
            'description' => '4K Smart TV',
            'price' => 8000000,
            'stock' => 15
        ]);
    }
}
