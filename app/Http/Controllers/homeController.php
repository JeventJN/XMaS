<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extracurricular;
use App\Models\userXmas;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function showXtraSchedule()
    {
        return view('home', ['xtras' => extracurricular::latest()->get()]);
    }
}
