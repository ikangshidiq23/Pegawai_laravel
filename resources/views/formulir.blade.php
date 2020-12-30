<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Laravel</title>
</head>

<body>
    <form action="/formulir/proses" method="POST">
        <input type="hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama"> <br/>
        
        <label for="alamat">Alamat: </label>
        <input type="text" name="alamat" id="alamat"> <br/>
        <input type="submit" value="Simpan">
        <!-- knpa bisa langsung ke tampil /formulir/proses -->
    </form>
</body>
</html>