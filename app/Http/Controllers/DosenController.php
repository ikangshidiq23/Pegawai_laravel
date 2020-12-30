<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Muhammad faisal Shidiq";

        $pelajaran = ["Al-Qur'an", "laravel", "php", "pemograman"];

        return view('biodata', ['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
