<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () 
    { 
        return view('welcome'); 
    }

); 
Route::get('/profil', [ProfileController::class, 'index']);

<<<<<<< HEAD
// --- ROUTE PRODUK ---

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
Route::get('/produk/{id}', [ProdukController::class, 'show']);
=======
use App\Http\Controllers\ProdukController;
Route::get('/produk', [ProdukController::class, 'urut']);
>>>>>>> 54481ce42a2a23314202e98ef4d72a80b9e65038
