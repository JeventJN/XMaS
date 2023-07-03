<?php

namespace App\Http\Controllers;


use App\Models\userXmas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class signUpController extends Controller
{
    public function index()
    {
        return view('Register/signup');
    }

    public function store(Request $request){

        $data = $request -> validate([
            'name' => 'required|min:6|max:25',
            'NIP' => 'required|digits:4|numeric|unique:user_xmas',
            'program' => 'required',
            'phoneNumber' => 'required|min:11|max:13',
            'password' => 'required|min:6',
            'photo' => 'image'
        ]);

        if ($request->file('photo')) {
            $data['photo'] = $request->file('photo')->store('database-assets');
        }

        if (!Str::startsWith($data['phoneNumber'], '62')) {
            $data['phoneNumber'] = '62' . substr($data['phoneNumber'], 1);
        }

        $data['password'] = Hash::make($data['password']);
        return view('auth', ['data' => $data]);
        // $phoneController = new phoneController();
        // // Call the index() method from phoneController
        // $response = $phoneController->index($data);

        // if($response == true){
        //     userXmas::create($data);

        //     return redirect('/login');
        // }

    }

    public function confirmPhoneNumber(Request $request){
        dd($request->data);
        userXmas::create($request->data);
        return redirect('/login');
    }

    public function home()
    {
        return view('home');

    }
}
