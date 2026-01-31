<form action="/kategori_update/{{ $kategori->id }}" method="POST">
  @csrf
  @method('PUT') 

  <input name="name" value="{{ $kategori->name }}"> 
  <button type="submit" class="bg-blue-500 text-white p-2 rounded">Simpan</button>
</form>