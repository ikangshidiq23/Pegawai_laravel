<!DOCTYPE html>
<html>
<head>
    <Title>web dinamis</Title>
</head>

<body>
    <header>
        <h2>Blog Jago ngoding</h2>
        <nav>
            <a href="/blog">HOME </a>
            |
            <a href="/blog/tentang"> Tentang </a>
            |
            <a href="/blog/kontak"> Kontak </a>
        </nav>

    </header>
    <hr>
    <br>
    <br>

    <!-- bagian judul halaman -->
    <h3> @yield('judul_halaman')</h3>

    <!-- bagian konten bloh -->
    @yield('konten')


    <br>
    <br>
    <hr>
    <footer>
        <p>&copy: <a href="https://www.facebook.com">Facebook</a></p>
    </footer>
</body>
</html>