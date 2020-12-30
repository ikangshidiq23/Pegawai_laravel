<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function(){
    return "Halo, Rajin ngoding Rajin ngoding Rajin ngoding, Rajin ngoding";
});

Route::get('blog', function(){
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

// Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::POST('/formulir/proses', 'PegawaiController@proses');

Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

// Route CRUD Pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');

//Menbuat form validasi pd laravel
Route::get('/input', 'RajinngodingController@input');
Route::post('/proses', 'RajinngodingController@proses');