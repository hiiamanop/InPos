<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function get()
    {
        return view('konfirmasi.get');
    }

    public function post()
    {
        return view('konfirmasi.post');
    }
}
