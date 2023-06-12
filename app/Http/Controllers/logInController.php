<?php

namespace App\Http\Controllers;

use App\Models\userXmas;
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

            return redirect()->intended('/home')->with('loginSuccess', 'Successfully logged in');

        }

        return back()->with('loginError', 'Login Failed!');

    }

    public function keluar(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended('/home')->with('logoutSuccess', 'Successfully logged out');
    }

    function delete(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $user = userXmas::find($request->NIP);
        $user -> delete();

        return redirect()->intended('/home')->with('deleteSuccess', 'Successfully del');
    }
}
