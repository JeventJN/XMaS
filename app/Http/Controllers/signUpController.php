<?php

namespace App\Http\Controllers;

use App\Models\userXmas;
use Illuminate\Http\Request;

class signUpController extends Controller
{

    public function store(Request $request){
        $data = $request -> validate([
            'name' => 'required|min:6|max:25',
            'NIP' => 'required|digits:4|numeric|unique:user_xmas',
            'program' => 'required',
            'phoneNumber' => 'required|min:11|max:13',
            'password' => 'required|min:6',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|min:2'
            // 'imageprofile' => 'required'
        ]);

        $data['photo'] = $request->file('image')->store('image', 'public');

        userXmas::create($data);

        return redirect('/login');
    }
}
