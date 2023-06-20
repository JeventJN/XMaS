<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extracurricular;
use App\Models\User;
use App\Models\userXmas;
use App\Models\report;
use App\Models\schedule;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function showXtraSchedule()
    {
        $reports = report::latest()->get()->filter(function ($report) {
            return $report->kdState == 3;})->values();

        $xtras = extracurricular::all();
        $flag = 1;


        foreach ($xtras as $xtra) {
            $latestSchedule = schedule::where('kdExtracurricular', '=', $xtra->kdExtracurricular)->latest('date')->first();
            if($latestSchedule->date >= today()){
                $flag = 0;
                break;
            }
        }

        if ($flag == 0) {
            return view('home', ['xtras' => extracurricular::latest()->get(), 'reports' => $reports, 'kosong' => 'no']);
        }
        else{
            return view('home', ['xtras' => $xtras, 'reports' => $reports, 'kosong' => 'yes']);
        }
    }
}
