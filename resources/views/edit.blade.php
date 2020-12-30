<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Pegawai</title>
</head>

<body>
    <header>
        <h2><a href="https://www.facebook.com">BISMILLAH</a></h2>
        <h3>Edit Pegawai</h3>

        <a href="/pegawai">kembali</a>

    </header>
    <br>
    <br>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br>
        Nama: <input type="text" required="required" name="nama" value="{{$p->pegawai_nama}}"> <br>
        Jabatan: <input type="text" required="required" name="jabatan" value="{{$p->pegawai_jabatan}}"> <br>
        Umur: <input type="nuber" required="required" name="umur" value="{{$p->pegawai_umur}}"> <br>
        Alamat: <textarea required="required" name="alamat" cols="30" rows="10">{{$p->pegawai_alamat}}</textarea> <br>
        <input type="submit" value="Simpat Data">
    </form>
    @endforeach
</body>
</html>