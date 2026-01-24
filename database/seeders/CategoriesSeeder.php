<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     \App\Models\Categories::create([
    'name' => 'Laptop ROG',
    'slug' => 'Laptop Gaming ROG Terbaru'
    ]);
    }
}
