<h1>Tambah Buku</h1>

<form action="/buku/store" method="POST">
    @csrf
    Judul: <input type="text" name="judul"><br><br>
    Penulis: <input type="text" name="penulis"><br><br>
    Tahun: <input type="text" name="tahun"><br><br>

    <button type="submit">Simpan</button>
    <a href="/buku">Batal</a>
</form>