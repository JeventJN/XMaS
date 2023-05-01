<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extracurricular;

class XtraController extends Controller
{
    //
    public function index()
    {
        $data = extracurricular::all();

        return view('home', ['data' => $data]);
    }
}
