<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
<<<<<<< HEAD
    // menampilkan form login
    public function login ()
    {
            return view('auth.login');
    }

    public function loginProcess(Request $request)
=======
    public function login(Request $request)
>>>>>>> 7255af853a252abca41c99b6ae3318bb2d04bbc6
      {
        // dd($request);
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
