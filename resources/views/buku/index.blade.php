<h1>Data Buku</h1>

<a href="/buku/create">Tambah Buku</a>

<table border="1">
<tr>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tahun</th>
    <th>Aksi</th>
</tr>

@foreach ($data as $b)
<tr>
    <td>{{ $b->judul }}</td>
    <td>{{ $b->penulis }}</td>
    <td>{{ $b->tahun }}</td>
    <td>
        <a href="/buku/edit/{{ $b->id }}">Edit</a>
        <a href="/buku/delete/{{ $b->id }}">Hapus</a>
    </td>
</tr>
@endforeach
</table>