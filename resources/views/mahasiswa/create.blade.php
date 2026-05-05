<h1>Tambah Mahasiswa</h1>

<form action="/mahasiswa/store" method="POST">
    @csrf
    Nama: <input type="text" name="nama"><br><br>
    NIM: <input type="text" name="nim"><br><br>
    Jurusan: <input type="text" name="jurusan"><br><br>
    <button type="submit">Simpan</button>
</form>