<?php

namespace App\Http\Controllers;

use Exception;
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

    public function loginProcess (Request $request)
    {
        // data yang akan diinputkan, sesuai dengan nama inputan pada form login

        $data = [
            'email' => $request->input('email'), // nama pada inputan email
            'password' => $request->input('password') // nama pada inputan password
        ];

        try {
            // cek keseuaian data autentikasi login (baan laravel)
            Auth::attempt($data);

            if(Auth::check()) {
                //login success
                return redirect('/dashboard');
            } else {
                // login gagal
                return redirect()->back()->with([
                    //kembali ke halaman sebelumnya dan kirim data denga keyword with
                    'error' => "Username/ Password Salah"
                ]);
            }
            
        } catch (Exception $e) {
            // jika terdapat error, kembalikan ke halaman sebelumnya dan kirim data pesan errornya

            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function logout () 
    {
            return view('auth.login');
    }
    
}
