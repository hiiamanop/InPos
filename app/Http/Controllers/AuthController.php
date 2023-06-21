<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //menampilkan form login
    public function login () 
    {
        // jika ada sesion yang login, maka akan diarahkan ke routing dashboard
        if (Auth::check() == true) {
            
            //arahkan ke routing dashboard
            return redirect ('dashboard');
        } else {
            return view('auth.login');
        }
    }
    
}
