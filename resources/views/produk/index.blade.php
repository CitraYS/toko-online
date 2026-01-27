<!DOCTYPE html>
<html>
<head>
    <title>Toko Online</title>
    <!-- Panggil CSS External -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- CONTOH 1: Menampilkan Data Tunggal -->
    <h1>Selamat Datang di {{ $shopName }}</h1>

    <hr>

    <!-- CONTOH 2: Menampilkan Banyak Data (Looping) -->
    <h2>Daftar Produk</h2>

    <div class="container">
        @foreach($products as $item)
            
            <div class="card">
                <h3 class="title">{{ $item->name }}</h3>
                <p>Rp {{ number_format($item->price) }}</p>
                
                @if($item->stock < 5)
                    <small style="color: orange;">Stok menipis: {{ $item->stock }}</small>
                @else
                    <small>Stok: {{ $item->stock }}</small>
                @endif
            </div>
        @endforeach
    </div>

</body>
</html>