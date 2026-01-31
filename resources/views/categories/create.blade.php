@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
<h2 class="text-2xl font-bold text-slate-800">Tambah Kategori</h2>
    <br>
<form action="/kategori_simpan" method="POST">
    @csrf <!-- WAJIB ADA -->

    <div class="mb-3">
        <label>Nama Kategori</label>
        <input type="text" name="name" placeholder="Nama Kategori" class="border p-2 w-full" style="width: 100%; padding: 8px; border: 1px solid #ccc;" >
        <!-- Pesan Error Validasi -->
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <input type="text" name="slug" placeholder="Deskripsi Kategori" class="border p-2 w-full" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
    </div>
    <p>
    <button type="submit" class="bg-blue-500 text-white p-2 rounded" style="padding: 8px;">Simpan</button>
</form>
@endsection