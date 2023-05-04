<?php

namespace App\Http\Controllers;

use App\Models\extracurricular;
use Illuminate\Http\Request;

class xtralistController extends Controller
{
    public function index(){
        // $data_sched = \Illuminate\Support\Facades\DB::table("extracurriculars")->select(\Illuminate\Support\Facades\DB::raw("(SELECT  *, DATE_FORMAT(MAX(`schedules`.`date`), '%a') AS `date_max`
        //                                                                                                                     FROM  `schedules`
        //                                                                                                                     JOIN `extracurriculars` ON `extracurriculars`.`kdExtracurricular` = `schedules`.`kdExtracurricular`
        //                                                                                                                     GROUP BY `extracurriculars`.kdextracurricular) AS `sched_max`"))
        //                                                                         ->where('date_max', '=', 'mon')->get();
        // dd($data_sched);
        // dd(extracurricular::latest()->filter(request(['search', 'Physique', 'NonPhysique', 'mon']))->get());
        return view('xtralist', [
            'xtras' => extracurricular::latest()->filter(request(['search', 'Physique', 'NonPhysique', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']))->get()
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
