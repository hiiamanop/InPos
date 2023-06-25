<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //menampilkan form login
    // public function login ()
    // {
    //     // jika ada sesion yang login, maka akan diarahkan ke routing dashboard
    //     if (Auth::check() == true) {

    //         //arahkan ke routing dashboard
    //         return redirect ('dashboard');
    //     } else {
    //         return view('auth.login');
    //     }
    // }

    public function login(Request $request)
      {
          $credentials = $request->validate([
              'id_pos' => ['required'],
              'password' => ['required'],
          ]);

          $user = User::where('id_pos', $request->id_pos)->first();
          session(
              ['id_pos' => $user->id_pos],
          );


          if (Auth::attempt($credentials)) {
              $request->session()->regenerate();

              return redirect()->intended('/dashboard');
          }
          return redirect('/')->with('Errors', 'Username atau password salah');
      }

    public function logout ()
    {
            return view('auth.login');
    }

}
