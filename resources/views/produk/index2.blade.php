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
    <a href="/produk/tambah"><button>+ Tambah Produk</button></a>
    <p>
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
                <p>Deskripsi : {{ $item->deskripsi }}</p>
                <!--  Edit --->
                <p><a href="/produk/{{ $item->id }}/edit"><button>Edit</button></a>
                <!--  Hapus --->
                <form action="/produk_hapus/{{ $item->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">
                            Hapus
                        </button>
                    </form> 
            </div>
        @endforeach
    </div>

</body>
</html>