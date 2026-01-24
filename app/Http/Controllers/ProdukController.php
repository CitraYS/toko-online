<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Mengambil SEMUA data di tabel products
        $products = \App\Models\Produk::all();

        // Debugging: Cek apakah data berhasil diambil
        dd($products);
    }
}
