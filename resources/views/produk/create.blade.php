<form action="/products" method="POST">
    @csrf <!-- WAJIB ADA -->

    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name" class="border p-2 w-full">
        <!-- Pesan Error Validasi -->
        @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="border p-2 w-full">
    </div>

    


    <button type="submit" class="bg-blue-500 text-white p-2 rounded">Simpan</button>
</form>