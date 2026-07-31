<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $keyboard = Category::where('name', 'Ban phim')->first()->id;
        $mouse = Category::where('name', 'Chuot')->first()->id;
        $monitor = Category::where('name', 'Man hinh')->first()->id;

        Product::insert([
            [
                'category_id' => $keyboard,
                'sku' => 'KB-01',
                'name' => 'Keychron K2',
                'price' => 1890000,
                'qty' => 3,
                'description' => 'Ban phim co'
            ],
            [
                'category_id' => $keyboard,
                'sku' => 'KB-02',
                'name' => 'Akko 3087',
                'price' => 1290000,
                'qty' => 5,
                'description' => 'Ban phim co'
            ],
            [
                'category_id' => $keyboard,
                'sku' => 'KB-03',
                'name' => 'Leopold FC660M',
                'price' => 2750000,
                'qty' => 2,
                'description' => 'Ban phim co'
            ],
            [
                'category_id' => $mouse,
                'sku' => 'MS-01',
                'name' => 'Logitech M331',
                'price' => 290000,
                'qty' => 10,
                'description' => 'Chuot khong day'
            ],
            [
                'category_id' => $mouse,
                'sku' => 'MS-02',
                'name' => 'Razer Viper',
                'price' => 990000,
                'qty' => 4,
                'description' => 'Gaming mouse'
            ],
            [
                'category_id' => $mouse,
                'sku' => 'MS-03',
                'name' => 'Xiaomi Silent',
                'price' => 250000,
                'qty' => 8,
                'description' => 'Silent mouse'
            ],
            [
                'category_id' => $monitor,
                'sku' => 'MN-01',
                'name' => 'Dell 24 inch',
                'price' => 3200000,
                'qty' => 2,
                'description' => 'Monitor Dell'
            ],
            [
                'category_id' => $monitor,
                'sku' => 'MN-02',
                'name' => 'LG UltraFine',
                'price' => 8500000,
                'qty' => 1,
                'description' => 'Monitor LG'
            ],
        ]);

        Product::factory()->count(20)->create();
    }
}