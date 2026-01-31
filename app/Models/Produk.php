<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public $timestamps = false;
       protected $fillable = [
        'categories_id', 'name', 'price', 'stock', 'deskripsi'
    ];
    
}

