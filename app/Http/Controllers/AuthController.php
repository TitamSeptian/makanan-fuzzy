<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->pwd,
        ];

        // check credentials
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            // not match
            $uname = User::where('email', $request->email)->first();
            $pwd = User::where('password', $request->pwd)->first();

            if (!$uname) {
                return redirect()->route('login')->with('msgWarning', "email salah");
            } else if (!$pwd) {
                return redirect()->route('login')->with('msgWarning', "Password salah");
            } else {
                return redirect()->route('login')->with('msgWarning', "User tidak di temukan");
            }
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login')->with('msgSuccess', "Berhasil logout");
    }
}
