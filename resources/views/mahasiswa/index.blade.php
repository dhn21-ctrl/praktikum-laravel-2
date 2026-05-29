
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');

        * {
            box-sizing: border-box;
        }

        body {
            padding: 24px;
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            background: #f4f6f9;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        .btn-tambah {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 18px;
            background: #1772FF;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.3s;
        }

        .btn-tambah:hover {
            background: #0f5ad4;
        }

        .table {
            width: 100%;
            border: 1px solid #EEEEEE;
            border-radius: 10px;
            overflow: hidden;
            background: white;
        }

        .table-header {
            display: flex;
            width: 100%;
            background: #000;
            padding: 18px 0;
            color: white;
            font-weight: bold;
        }

        .table-row {
            display: flex;
            width: 100%;
            padding: 18px 0;
            border-bottom: 1px solid #eee;
        }

        .table-row:nth-of-type(odd) {
            background: #EEEEEE;
        }

        .table-data,
        .header__item {
            flex: 1 1 20%;
            text-align: center;
        }

        .aksi a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 5px;
            color: white;
            margin: 0 3px;
            font-size: 14px;
        }

        .edit {
            background: #28a745;
        }

        .hapus {
            background: #dc3545;
        }

        .edit:hover {
            background: #218838;
        }

        .hapus:hover {
            background: #c82333;
        }

        @media (max-width: 768px) {
            .table-header,
            .table-row {
                flex-direction: column;
                padding: 10px;
            }

            .header__item,
            .table-data {
                text-align: left;
                padding: 5px 0;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Daftar Mahasiswa</h1>

        <a href="/mahasiswa/create" class="btn-tambah">
            + Tambah Data
        </a>

        <div class="table">

            <div class="table-header">
                <div class="header__item">Nama</div>
                <div class="header__item">NIM</div>
                <div class="header__item">Jurusan</div>
                <div class="header__item">Aksi</div>
            </div>

            @foreach ($data as $m)
            <div class="table-row">

                <div class="table-data">
                    {{ $m->nama }}
                </div>

                <div class="table-data">
                    {{ $m->nim }}
                </div>

                <div class="table-data">
                    {{ $m->jurusan }}
                </div>

                <div class="table-data aksi">
                    <a href="/mahasiswa/edit/{{ $m->id }}" class="edit">
                        Edit
                    </a>

                    <a href="/mahasiswa/delete/{{ $m->id }}" class="hapus">
                        Hapus
                    </a>
                </div>

            </div>
            @endforeach

        </div>

    </div>

</body>
</html>

