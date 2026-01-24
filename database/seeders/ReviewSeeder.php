<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    \App\Models\Reviews::create([
    'produks_id' => 1,
    'rating' => 4,
    'comment' => 'KEREN',
    ]);
    }
}
