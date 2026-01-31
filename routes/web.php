<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () 
    { 
        return view('welcome'); 
    }

); 
Route::get('/profil', [ProfileController::class, 'index']);

// 1. Index (Daftar Semua)
// URL: http://127.0.0.1:8000/produk
Route::get('/produk', [ProdukController::class, 'index']);

// 2. Filter Stock Low (Specific Route)
// URL: http://127.0.0.1:8000/produk/stok-menipis
Route::get('/produk/stok-menipis', [ProdukController::class, 'stockLow']);

// 3. Featured Product (Specific Route)
// URL: http://127.0.0.1:8000/produk/unggulan
Route::get('/produk/unggulan', [ProdukController::class, 'featured']);

// 4. Show Detail (Dynamic Parameter Route)
// URL: http://127.0.0.1:8000/produk/1 atau /produk/5
// PENTING: Taruh ini paling bawah agar tidak memblokir route lain
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/lihat', [ProdukController::class, 'lihat']);
Route::get('/produk/tambah', [ProdukController::class, 'create']); // Tampil Form
Route::post('/produk_simpan', [ProdukController::class, 'store']); // Proses Simpan
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
Route::put('/produk_update/{id}', [ProdukController::class, 'update']);
Route::get('/produk/{id}/hapus', [ProdukController::class, 'viewHapus']);
Route::delete('/produk_hapus/{id}', [ProdukController::class, 'destroy']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/lihat', [KategoriController::class, 'lihat']);
Route::get('/kategori/tambah', [KategoriController::class, 'create']); // Tampil Form
Route::post('/kategori_simpan', [KategoriController::class, 'store']); // Proses Simpan
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::put('/kategori_update/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/{id}/hapus', [KategoriController::class, 'viewHapus']);
Route::delete('/kategori_hapus/{id}', [KategoriController::class, 'destroy']);