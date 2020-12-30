<!DOCTYPE html>
<html lang="en">
<head>
    <title>Passing Data Controller</title>
</head>

<body>
    <header>
    <h1>Passing Data Controller</h1>
    <p>Facebook milik {{$nama}}</p>
    <a href="https://www.facebook.com" target="blank">Facebook</a>
    </header>

    <p style=text-align:center>Matakuliah</p>
    <ul>
        @foreach($matkul as $matkul)

        <li>{{ $matkul }}</li>

        @endforeach

    </ul>
</body>
</html>