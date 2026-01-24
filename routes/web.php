<?php

use App\Http\Controllers\ProfileController;

Route::get('/', function () 
{ return view('welcome'); }); 
// 2. Buat jalur baru ke Controller 
// Format: [NamaClass::class, 'NamaMethod'] 
Route::get('/profil', [ProfileController::class, 'index']);

use App\Http\Controllers\ProdukController;

Route::get('/produk', [ProdukController::class, 'index']);
