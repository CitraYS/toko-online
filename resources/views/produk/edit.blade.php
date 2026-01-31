<form action="/produk_update/{{ $product->id }}" method="POST">
  @csrf
  @method('PUT') 

  <input name="name" value="{{ $product->name }}"> 
  <button type="submit" class="bg-blue-500 text-white p-2 rounded">Simpan</button>
</form>