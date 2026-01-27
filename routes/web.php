<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;

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

Route::get('/products/create', [ProdukController::class, 'create']); // Tampil Form
Route::post('/products', [ProdukController::class, 'store']); // Proses Simpan