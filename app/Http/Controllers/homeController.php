<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extracurricular;

class homeController extends Controller
{
    //
    // public function index()
    // {
    //     return view('home');
    // }

    public function showXtraSchedule()
    {
        return view('home', ['xtras' => extracurricular::latest()->get()]);
    }

    // public function showXtraSchedule()
    // {
    //     $data = extracurricular::all();

    //     return view('home', ['data' => $data]);
    // }
}
