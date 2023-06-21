<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnggahController extends Controller
{
     //function index
     public function index() {
        return view('unggah.index');
    }
}
