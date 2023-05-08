<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extracurricular;
use App\Models\userXmas;

class homeController extends Controller
{
    public function showXtraSchedule()
    {
        return view('home', ['xtras' => extracurricular::latest()->get()]);
    }

    public function navProfile()
    {
        return view('User.navbarUser', ['users'  => userXmas::latest()->get()]);
    }
}
