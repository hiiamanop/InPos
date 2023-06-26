<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
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
                // dd($user->id_pos);
              return redirect()->intended('/dashboard');
          }
          return redirect('/')->with('Errors', 'Password salah');
      }

    public function logout ()
    {
            return view('auth.login');
    }

}
