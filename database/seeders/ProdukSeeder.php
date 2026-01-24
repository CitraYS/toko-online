<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Produk::create([
    'categories_id' => 1,
    'name' => 'Laptop ROG',
    'price' => 15000000,
    'stock' => 5,
    ]);
    }
}
