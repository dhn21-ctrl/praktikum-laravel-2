<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Anggota & Kartu Anggota</h2>

        <a href="{{ route('anggota.create') }}" class="btn btn-primary">
            Tambah Anggota
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Kartu</th>
                <th>Tanggal Aktivasi</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse($anggotas as $index => $anggota)

            <tr>

                <td>{{ $index + 1 }}</td>

                <td>{{ $anggota->nama }}</td>

                <td>{{ $anggota->email }}</td>

                <td>
                    {{ $anggota->kartuAnggota->nomor_kartu ?? '-' }}
                </td>

                <td>
                    {{ $anggota->kartuAnggota->tanggal_aktivasi ?? '-' }}
                </td>

                <td>

                    <a href="{{ route('anggota.edit', $anggota->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('anggota.destroy', $anggota->id) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus data?')">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>
                <td colspan="6" class="text-center">
                    Belum ada data anggota
                </td>
            </tr>

            @endforelse

        </tbody>

    </table>

</div>

</body>
</html>