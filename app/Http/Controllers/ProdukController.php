<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk; // Pastikan Model sudah di-import

class ProdukController extends Controller
{

    public function create()
    {
        return view('produk.create');
    }

    // 2. Method POST: Menerima & Memproses Data (Simpan)
    public function store(Request $request)
    {
        // A. Validasi
        // PENTING: Jika validasi ini gagal, Laravel otomatis "Reload" halaman.
        // Code di bawahnya (try-catch) TIDAK AKAN dijalankan.
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        try {
            // B. Coba Simpan ke Database
            Product::create($request->all());

            // C. Jika Berhasil, Redirect
            return redirect('/products')->with('success', 'Produk berhasil ditambahkan!');
            
        } catch (\Exception $e) {
            // D. Jika Gagal (Database Error), Tangkap errornya
            // dd($e->getMessage()); // Debugging: Lihat pesan error di layar hitam
            
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage())
                ->withInput(); // withInput() berguna agar inputan tidak hilang
        }
    }

    public function lihat()
    {
        $shopName = "Toko Sembako Jaya"; // Data Tunggal (String)
        $products = Produk::all(); // Data Banyak (Array)
        
        return view('produk.index', compact('shopName', 'products'));
    }
    
    // 1. INDEX: Mengambil Banyak Data (All/Latest + Relasi)
    public function index()
    {
        // Ambil semua produk
        $products = Produk::all();
        dd($products); // Cek: Harus muncul Collection (Array) banyak item
    }
    
    // 2. SHOW: Mengambil Satu Data Dinamis (Find)
    // Parameter $id otomatis ditangkap dari URL
    public function show($id)
    {
        // Cari produk berdasarkan ID
        $product = Produk::find($id);
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
        $products = Produk::where('stock', '<', 5)->get();

        dd($products); // Cek: Pastikan column 'stock' isinya kecil semua
    }

    // 4. FEATURED: Ambil Satu Data Spesifik (First)
    public function featured()
    {
        // Ambil 1 produk unggulan pertama yang ditemukan
        // Gunakan ->first() karena hasilnya cuma satu
        $product = Produk::where('is_featured', true)->first();

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