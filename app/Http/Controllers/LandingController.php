<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
     //function index
     public function landing() {
        return view('landingpage.content');
    }
}
