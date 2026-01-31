<!DOCTYPE html>
<html lang="id">
<head>
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100">

    <!-- SIDEBAR (Menu Kiri) -->
    <aside class="w-64 h-screen bg-slate-800 text-white p-6 fixed">
        <h1 class="text-xl font-bold mb-8">Tabel Produk</h1>
        <nav class="space-y-2">
            <a href="/produk/lihat" class="block py-2 px-4 bg-slate-700 rounded transition">Kelola Produk</a>
            <a href="/kategori/lihat" class="block py-2 px-4 hover:bg-slate-700 rounded transition">Kategori</a>
            <a href="#" class="block py-2 px-4 hover:bg-slate-700 rounded transition">Laporan</a>
        </nav>
    </aside>

    <!-- CONTENT WRAPPER (Isi Kanan) -->
    <div class="flex-1 ml-64 min-h-screen">
        <!-- Navbar Atas (Opsional) -->
        <header class="bg-white shadow p-4 flex justify-end">
            <span class="text-sm text-gray-600">Halo, Citra</span>
        </header>

        <!-- Area Konten Utama -->
        <div class="p-8">
            @yield('content')
        </div>
    </div>

</body>
</html>
