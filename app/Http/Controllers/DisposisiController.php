<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    //
    public function index() {
        return view('disposisi.index');
    }

    public function disposisi() {
        return view('disposisi.disposisi');
    }
}
