<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="mb-4">Edit Anggota</h2>

        @if($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('anggota.update', $anggota->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label">Nama</label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ old('nama', $anggota->nama) }}">

            </div>

            <div class="mb-3">

                <label class="form-label">Email</label>

                <input type="email"
                       name="email"
                       class="form-control"
                       value="{{ old('email', $anggota->email) }}">

            </div>

            <div class="mb-3">

                <label class="form-label">Nomor Kartu</label>

                <input type="text"
                       name="nomor_kartu"
                       class="form-control"
                       value="{{ old('nomor_kartu', $anggota->kartuAnggota->nomor_kartu) }}">

            </div>

            <div class="mb-3">

                <label class="form-label">Tanggal Aktivasi</label>

                <input type="date"
                       name="tanggal_aktivasi"
                       class="form-control"
                       value="{{ old('tanggal_aktivasi', $anggota->kartuAnggota->tanggal_aktivasi) }}">

            </div>

            <button type="submit" class="btn btn-warning">
                Update
            </button>

            <a href="{{ route('anggota.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

</body>
</html>