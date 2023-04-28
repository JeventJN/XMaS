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
        // return view('xtralist', [
        //     'xtras' => extracurricular::with('schedules',
        //                 ['members' => function ($query){
        //                     $query->when(function($query){
        //                         $query->where('kdState', 2);
        //                     });
        //                 }])->get()
        // ]);
    }

    public function show(Extracurricular $xtra){
        return view('xtrapage', ['xtra' => $xtra]);
    }
}
