<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function utama()
    {
        // Mengambil SEMUA data di tabel products
        $products = \App\Models\Produk::all();

        // Debugging: Cek apakah data berhasil diambil
        dd($products);
        //return view('produk.index', compact('data_produk'));
    }

    public function show($id)
    {
        // Cari produk berdasarkan ID (misal: products/1)
        $product = \App\Models\Produk::find($id);

        // Jika ID ngawur (tidak ketemu), tampilkan 404
        if (!$product) {
            abort(404);
        }

        // Cek apakah data produk yang diambil sudah benar
        dd($product);
    }

    public function urut()
    {
        // latest() = orderBy('created_at', 'desc')
        $products = \App\Models\Produk::latest()->get();

        // Cek urutan array, pastikan ID terbesar ada di index 0
        dd($products);
    }
}
