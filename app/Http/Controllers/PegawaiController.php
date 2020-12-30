<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// MEMANGGIL DATA BASE DENGAN CARA QUERY BUILDER
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // public function index($nama){
    //     return $nama;
    // }
    public function index(){
        //mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->paginate(10);

        //mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }
    public function cari(Request $request){
        //menangkap data pencarian
        $cari = $request->cari;

        //mengabil data dari table pegawai sesuai pencarian
        $pegawai = DB::table('pegawai')
        ->where('pegawai_nama', 'like', "%".$cari."%")
        ->paginate();

        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request){
        //insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        //alihkan halamat ke halaman pegawai
        return redirect('/pegawai');
    }

    public function edit($id){
        //mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        //passing data pegawai yang di dapat ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }
    public function update(Request $request){
        //update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        //alihkan halaman ke halaman peegawai
        return redirect('/pegawai');
    }

    public function hapus($id){
        //menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        return redirect('/pegawai');
    }


    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "nama : ".$nama.", Alamat : ".$alamat;
    }
}
?>