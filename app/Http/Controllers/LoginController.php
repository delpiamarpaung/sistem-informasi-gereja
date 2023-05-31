<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/pengurusrenunganharian');
        }
        return back()->with('loginError', 'Login tidak berhasil!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        //invalidates session, supaya tidak dapat dipakai
        $request->session()->invalidate();
        //bikin baru, supaya tidak dibajak
        $request->session()->regenerateToken();
        return redirect('/');

    }
}
