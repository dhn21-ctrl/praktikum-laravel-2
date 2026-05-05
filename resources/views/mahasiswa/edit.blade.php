<h1>Edit Mahasiswa</h1>

<form action="/mahasiswa/update/{{ $m->id }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama" value="{{ $m->nama }}"><br>
    NIM: <input type="text" name="nim" value="{{ $m->nim }}"><br>
    Jurusan: <input type="text" name="jurusan" value="{{ $m->jurusan }}"><br>
    <button type="submit">Update</button>
</form>