<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function pencapaian()
    {
        return view('lamanutama.utama-pencapaian');
    }

    public function tentang()
    {
        return view('lamanutama.utama-tentang');
    }
}
