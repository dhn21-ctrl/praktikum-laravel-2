<h1>Edit Buku</h1>

<form action="/buku/update/{{ $b->id }}" method="POST">
    @csrf
    Judul: <input type="text" name="judul" value="{{ $b->judul }}"><br>
    Penulis: <input type="text" name="penulis" value="{{ $b->penulis }}"><br>
    Tahun: <input type="text" name="tahun" value="{{ $b->tahun }}"><br>

    <button type="submit">Update</button>
    <a href="/buku">Batal</a>
</form>