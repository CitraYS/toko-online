<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; // Pastikan Model sudah di-import

class ProdukController extends Controller
{
    // 1. INDEX: Mengambil Banyak Data (All/Latest + Relasi)
    public function index()
    {
        // Ambil semua produk
        $products = Product::all();

        dd($products); // Cek: Harus muncul Collection (Array) banyak item
    }

    // 2. SHOW: Mengambil Satu Data Dinamis (Find)
    // Parameter $id otomatis ditangkap dari URL
    public function show($id)
    {
        // Cari produk berdasarkan ID
        $product = Product::find($id);

        // Validasi: Jika ID tidak ada di database, tampilkan 404
        if (!$product) {
            abort(404);
        }

        dd($product); // Cek: Harus muncul 1 Object Product
    }

    // 3. STOCK LOW: Filter Data (Where)
    public function stockLow()
    {
        // Cari produk yang stoknya di bawah 5
        // Jangan lupa ->get() di akhir
        $products = Product::where('stock', '<', 5)->get();

        dd($products); // Cek: Pastikan column 'stock' isinya kecil semua
    }

    // 4. FEATURED: Ambil Satu Data Spesifik (First)
    public function featured()
    {
        // Ambil 1 produk unggulan pertama yang ditemukan
        // Gunakan ->first() karena hasilnya cuma satu
        $product = Product::where('is_featured', true)->first();

        dd($product); // Cek: Harus muncul 1 Object, bukan Array
    }

    public function urut()
    {
        // latest() = orderBy('created_at', 'desc')
        $products = \App\Models\Produk::latest()->get();

        // Cek urutan array, pastikan ID terbesar ada di index 0
        dd($products);
    }
}
