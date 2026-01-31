@extends('layouts.admin')

@section('content')
    
    <!-- Header Halaman -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Daftar Kategori</h2>
        
        <!-- Tombol Tambah -->
        <a href="/kategori/tambah" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition">
            + Tambah Kategori
        </a>
    </div>

    <!-- Tabel Data -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-slate-50 border-b">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-bold text-slate-500 uppercase">Nama Kategori</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-slate-500 uppercase">Deskripsi</th>
                    <th class="px-6 py-3 text-center text-sm font-bold text-slate-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($kategori as $item)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-6 py-4 text-slate-700">{{ $item->name }}</td>
                        <td class="px-6 py-4 text-slate-700">{{ $item->slug }}</td>
                        
                        <!-- Kolom Aksi -->
                        <td class="px-6 py-4 text-center space-x-2">
                            
                            <!-- Tombol Edit -->
                            <a href="/kategori/{{ $item->id }}/edit" 
                               class="text-yellow-600 border border-yellow-300 px-3 py-1 rounded hover:bg-yellow-50 text-sm transition">
                                Edit
                            </a>

                            <!-- Tombol Hapus (Wajib pakai Form agar aman) -->
                            <form action="/kategori_hapus/{{ $item->id }}" method="POST" class="inline" 
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 border border-red-300 px-3 py-1 rounded hover:bg-red-50 text-sm transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center p-6 text-gray-500">
                            Belum ada data Kategori. Silakan tambah data baru.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection