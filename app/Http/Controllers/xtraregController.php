<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extracurricular;

class xtraregController extends Controller
{
    public function xtra()
    {
        return view('User.xtrareg', ['xtras' => extracurricular::latest()->get()]);
    }
}
