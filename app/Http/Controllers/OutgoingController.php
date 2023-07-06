<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutgoingController extends Controller
{
    public function index()
    {
        return view('outgoing.index');
    }

    public function preview()
    {
        return view('outgoing.preview');
    }

    public function hasil()
    {
        return view('outgoing.hasil');
    }

}
