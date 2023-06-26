<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // menampilkan form login
    public function login ()
    {
            return view('auth.login');
    }

    public function loginProcess(Request $request)
      {
          $credentials = $request->validate([
              'id' => ['required'],
              'password' => ['required'],
          ]);

          $user = User::where('id', $request->id)->first();
          session(
              ['id' => $user->id],
          );


          if (Auth::attempt($credentials)) {
              $request->session()->regenerate();

              return redirect()->intended('/dashboard');
          }
          return redirect('/login')->with('Errors', 'Username atau password salah');
      }

    public function logout ()
    {
            return view('auth.login');
    }

}
