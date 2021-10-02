<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'anda belum mengisi username anda',
                'password.required' => 'password anda kosong'
            ]
        );

        $username = $request->username;
        $password = $request->password;

        $content = DB::table('users')->where('username', $username)->first();
        if (!$content) {
            return redirect('/login')->with('error', 'Maaf username anda salah');
        }

        if ($password != $content->password) {
            return redirect('/login')->with('error', 'Maaf password anda salah');
        } else {
            return redirect('/')->with('datasession', $request->session()->put([
                'username' => $content->username,
                'email' => $content->email,
                'is_login' => 1
            ]));
        }
    }
}
