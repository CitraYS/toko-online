<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function show()
    {
        // Cari produk berdasarkan ID (misal: products/1)
        $product = Produk::find(1);

        // Jika ID ngawur (tidak ketemu), tampilkan 404
        if (!$product) {
            abort(404);
        }

        // Cek apakah data produk yang diambil sudah benar
        dd($product);
    }
}
