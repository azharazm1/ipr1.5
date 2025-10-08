<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function terma()
    {
        return view('footer.terma_syarat');
    }
    
    public function privasi()
    {
        return view('footer.dasar_privasi');
    }

    public function keselamatan()
    {
        return view('footer.dasar_keselamatan');
    }
    
    public function penafian()
    {
        return view('footer.penafian');
    }
}
