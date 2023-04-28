<?php

namespace App\Http\Controllers;

use App\Models\extracurricular;
use Illuminate\Http\Request;

class xtralistController extends Controller
{
    public function index(){
        return view('xtralist', [
            'xtras' => extracurricular::all()
        ]);
    }

    public function show(Extracurricular $xtra){
        return view('xtrapage', ['xtra' => $xtra]);
    }
}
