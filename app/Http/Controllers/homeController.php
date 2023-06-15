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
        $xtras = extracurricular::all();
        $flag = 1;


        foreach ($xtras as $xtra) {
            $latestSchedule = $xtra->latest_schedule;
            if($latestSchedule >= today()){
                $flag = 0;
            }
        }

        if ($flag == 0) {
            return view('home', ['xtras' => extracurricular::latest()->get(), 'reports' => $reports]);
        }
        else{
            return view('home', ['xtras' => $xtras, 'reports' => $reports, 'kosong' => 'we']);
        }
    }
}
