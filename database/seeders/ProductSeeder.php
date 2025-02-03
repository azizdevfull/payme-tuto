<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $product = Product::create(['title' => "Telefon $i", 'price' => 1000]);
            $product->orders()->create([
                'price' => $product->price,
            ]);
        }
    }
}
