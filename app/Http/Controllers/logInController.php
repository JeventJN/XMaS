<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logInController extends Controller
{
    public function index()
    {
        return view('Register.login');
    }

    public function masuk(Request $request){
        $credentials = $request -> validate([
            'NIP' => 'required|digits:4|numeric',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            dd(Auth::check());
            return redirect()->intended('/home');
            // return redirect()->intended('/home')->with('auth', Auth::check());
            // return redirect('/home')->with('auth', Auth::check());
            // return redirect('/home?auth='.Auth::check());

        }

        return back()->with('loginError', 'Login Failed!');

    }

    public function keluar(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
