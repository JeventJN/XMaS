<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extracurricular;
use App\Models\User;
use App\Models\userXmas;
use App\Models\report;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function showXtraSchedule()
    {
        $reports = report::all();
        return view('home', ['xtras' => extracurricular::latest()->get(), 'reports' => $reports]);
    }
}
