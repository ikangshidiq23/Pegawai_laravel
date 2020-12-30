<!-- menghubungkan dengan view tamplate MASTER -->
@extends('master')

<!-- isi bahian judul HALAMAN -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'halaman kontak')

<!-- isi bagian KONTEN  -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <p>Ini Adalah Halaman KONTAK</p>

    <table border="1">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>mfaisalsholeh@gmail.com</td>
        </tr>
        <tr>
            <td>hp</td>
            <td>:</td>
            <td>08889391689</td>
        </tr>
    
    </table>

@endsection