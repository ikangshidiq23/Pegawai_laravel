<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Membuat CRUD pada Laravel</title>
</head>

<body>
    <h2><a href="https://www.Facebook.com">Bismillah</a></h2>
    <h3>Input Data Pegawai</h3>
    <br>
    <a href="/pegawai">Kembali</a>

    <br>
    <br>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
       <p><label for="nama">Nama: </label>  <input id="nama" type="text" name="nama" require="required"> <br/> </p>
       <label for="jabatan">Jabatan: </label> <input id="jabatan" type="text" name="jabatan" require="required"> <br/>
       <p> Umur <input type="number" name="umur" require="required"> <br/> </p> 
        Alamat <textarea name="alamat" cols="30" rows="10" require="required"></textarea>
       <p> <input type="submit" value="Simpat Data"> </p>
    </form>

</body>
</html>