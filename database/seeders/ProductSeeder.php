<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
 
    public function run(): void
    {
        Product::insert([
            ['name' => 'Apple iPhone 13', 'price' => 799.00, 'description' => 'Latest model of Apple iPhone with A15 Bionic chip', 'stock' => 100, 'image_url' => '/images/iphone_13_PNG31.png'],
            ['name' => 'Samsung Galaxy S21', 'price' => 699.00, 'description' => 'Flagship Samsung phone with Exynos 2100', 'stock' => 200, 'image_url' => '/images/samsung-galaxy-s21-5g-0.jpg'],
            ['name' => 'Google Pixel 6', 'price' => 599.00, 'description' => 'Google’s latest phone with Tensor chip', 'stock' => 150, 'image_url' => '/images/google-pixel-6.jpg'],
            ['name' => 'OnePlus 9', 'price' => 729.00, 'description' => 'OnePlus phone with Snapdragon 888', 'stock' => 120, 'image_url' => '/images/iphone_13_PNG31.png'],
            ['name' => 'Sony WH-1000XM4', 'price' => 349.00, 'description' => 'Industry leading noise cancelling headphones', 'stock' => 130, 'image_url' => '/images/iphone_13_PNG31.png'],
            ['name' => 'Apple MacBook Pro', 'price' => 1299.00, 'description' => 'Apple laptop with M1 chip', 'stock' => 140, 'image_url' => 'https://www.shutterstock.com/image-photo/laptop-notebook-isolated-on-transparent-600nw-2440529333.jpg'],
            ['name' => 'Dell XPS 13', 'price' => 999.00, 'description' => 'Dell’s premium ultrabook with Intel i7', 'stock' => 110, 'image_url' => 'https://www.shutterstock.com/image-photo/laptop-notebook-isolated-on-transparent-600nw-2440529333.jpg'],
            ['name' => 'Samsung QLED TV', 'price' => 1199.00, 'description' => 'Samsung 55 inch QLED 4K TV', 'stock' => 160, 'image_url' => 'https://www.shutterstock.com/image-photo/laptop-notebook-isolated-on-transparent-600nw-2440529333.jpg'],
            ['name' => 'Sony PlayStation 5', 'price' => 499.00, 'description' => 'Next-gen gaming console from Sony', 'stock' => 170, 'image_url' => 'https://www.shutterstock.com/image-photo/laptop-notebook-isolated-on-transparent-600nw-2440529333.jpg'],
            ['name' => 'Microsoft Xbox Series X', 'price' => 499.00, 'description' => 'Next-gen gaming console from Microsoft', 'stock' => 180, 'image_url' => 'https://www.shutterstock.com/image-photo/laptop-notebook-isolated-on-transparent-600nw-2440529333.jpg'],
        ]);
    }
}
