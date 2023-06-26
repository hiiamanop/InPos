<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\User;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index() {
        return view('arsip.index');
    }

    public function showarsip()
    {
        $arsip = Files::all();
        return view("arsip.index", ['arsip' => $arsip]);
    }

    // public function getDataById() {
    //     $posisi = User::with();
    // }


}
