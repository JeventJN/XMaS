<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extracurricular;

class homeController extends Controller
{
    public function showXtraSchedule()
    {
        return view('home', ['xtras' => extracurricular::latest()->get()]);
    }
}