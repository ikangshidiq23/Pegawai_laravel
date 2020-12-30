<!DOCTYPE htm>
<html lang="en">
<head>
    <title>Tutorial Membuat CRUD pada laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-body">

    <header style="text-align:center">
        <h2 class="text-center">Rajin Ngoding</h2>
        <h2>Membuat Pagination pd laravel</h2>
        <h3>Data Pegawai</h3>
    </header>

        <p>Cari Data Pegawai</p>

        <div class="form-group">
        </div>
        <form action="/pegawai/cari" method="GET" class="form-inline">
            <input class="form-control" type="text" name="cari" placeholder="Cari pegawai..." value="{{ old('cari') }}">
            <input class="btn btn-primary ml-3" type="submit" value="CARI">
        </form>
        <br>

        <a href="/pegawai/tambah" style="font-color:red"> [+] Tambah Pegawai Baru </a>

        <br>
        <br>

        <style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin:5px;
        }
        </style>

        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
        <br/>
        Halaman: {{ $pegawai->currentPage() }} <br>
        Jumlah Data: {{ $pegawai->total() }} <br>
        Data Per Halaman: {{ $pegawai->perPage() }} <br>

        {{ $pegawai->links() }}
        </div>
        </div>
    </div>
</body>

</html>