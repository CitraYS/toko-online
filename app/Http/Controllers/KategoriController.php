<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories; // Pastikan Model sudah di-import

class KategoriController extends Controller
{   
    public function index()
    {
        // Ambil semua produk
        $kategori = Categories::all();
        dd($kategori); // Cek: Harus muncul Collection (Array) banyak item
    }
    // 1. Tambah data
    public function create()
    {
        return view('categories.create');
    }

    // 2. Method POST: Menerima & Memproses Data (Simpan)
    public function store(Request $request)
    {
        // A. Validasi
        // PENTING: Jika validasi ini gagal, Laravel otomatis "Reload" halaman.
        // Code di bawahnya (try-catch) TIDAK AKAN dijalankan.
        $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required',
        ]);

        try {
            // B. Coba Simpan ke Database
            Categories::create($request->all());

            // C. Jika Berhasil, Redirect
            return redirect('/kategori/lihat')->with('success', 'Kategori berhasil ditambahkan!');
            
        } catch (\Exception $e) {
            // D. Jika Gagal (Database Error), Tangkap errornya
            // dd($e->getMessage()); // Debugging: Lihat pesan error di layar hitam
            
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage())
                ->withInput(); // withInput() berguna agar inputan tidak hilang
        }
    }

    public function edit($id)
    {
        $kategori = Categories::find($id);
        return view('categories.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        // 1. Cari Produknya dulu
        $kategori = Categories::find($id);

        // 2. Validasi & Update
        // (Cara update massal, mirip create)
        $kategori->update($request->all());

        return redirect('/kategori/lihat')->with('success', 'kategori berhasil diupdate!');
    }

    public function viewHapus($id)
    {
        $kategori = Categories::find($id);
        return view('categories.hapus', compact('kategori'));
    }

    public function destroy($id)
    {
        $kategori = Categories::find($id);
        $kategori->delete();
        return redirect('/kategori/lihat');
    }

    public function lihat()
    {
        $shopName = "Toko Sembako Jaya"; // Data Tunggal (String)
        $kategori = Categories::all(); // Data Banyak (Array)
        
        return view('categories.index', compact('shopName', 'kategori'));
    }    
}
