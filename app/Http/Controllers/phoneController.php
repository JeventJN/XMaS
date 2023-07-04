<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phoneController extends Controller
{
    //

    public function index($data) {
        return view('auth', ['data' => $data]);
    }
}
