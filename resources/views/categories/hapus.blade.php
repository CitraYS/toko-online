<form action="/kategori_hapus/{{ $item->id }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">
        Hapus
    </button>
</form>