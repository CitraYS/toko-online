@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
<h2 class="text-2xl font-bold text-slate-800">Tambah Produk</h2>
    <br>
<form action="/produk_simpan" method="POST">
    @csrf <!-- WAJIB ADA -->

    <div class="mb-3">
        <label for="categories_id">Kategori</label>
        <select name="categories_id" id="categories_id" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
            <option value="" disabled selected>-- Pilih Kategori --</option>
            <option value="1">1. ROG</option>
            <option value="2">2. HP</option>
            <option value="3">3. LENOVO</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name" placeholder="Nama Produk" class="border p-2 w-full" style="width: 100%; padding: 8px; border: 1px solid #ccc;" >
        <!-- Pesan Error Validasi -->
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" placeholder="Harga Produk" class="border p-2 w-full" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
    </div>

      <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" placeholder="Stock Produk" class="border p-2 w-full" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" placeholder="Deskripsi Produk" class="border p-2 w-full" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
    </div>
    <p>
    <button type="submit" class="bg-blue-500 text-white p-2 rounded" style="padding: 8px;">Simpan</button>
</form>
@endsection