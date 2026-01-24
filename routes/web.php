<?php

use App\Http\Controllers\ProfileController;

Route::get('/', function () 
    { 
        return view('welcome'); 
    }

); 
Route::get('/profil', [ProfileController::class, 'index']);

use App\Http\Controllers\ProdukController;
Route::get('/produk', [ProdukController::class, 'urut']);
