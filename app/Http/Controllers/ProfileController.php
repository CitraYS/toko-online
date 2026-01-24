<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller { 
public function index() 
    { 
    $nama_saya = "Citra"; $hobi = "Coding Laravel"; 
    // // 2. Kirim data ke View 'profile' 
    // // Kita pakai array asosiatif ['key' => $value] return view('profile', [ 'nama' => $nama_saya, 'hobi' => $hobi ]); 
    return view('profile', [ 'nama' => $nama_saya, 'hobi' => $hobi ]); 
    } 
}