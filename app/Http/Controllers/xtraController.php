<?php

namespace App\Http\Controllers;

use App\Models\extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class xtraController extends Controller
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

    public function searchLive(Request $request){
        // ddd(request(['search', 'Physique', 'NonPhysique', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']));
        if($request->ajax()){
            $output="";
            $data = extracurricular::latest()->filter(request(['search', 'Physique', 'NonPhysique', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']))->get();

            if(count($data) > 0){
                foreach ($data as $xtra){
                    $output .= '
                        <a href="/xtralist/' . $xtra->kdExtracurricular . ' ">
                            <div class="xtraboxcontainer flex justify-center items-center">
                                <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                    <img src="' .  asset('/Assets/' . $xtra->logo ) . '" alt="' . $xtra->name . '">
                                </div>
                                <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                    <div class="text-[1.9vw] font-bold underline mb-[1vw]">' . Str::limit($xtra->name, 12, '...') .'</div>
                                    <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . implode(' ', array_slice(explode(' ', optional(optional($xtra->leader)->userXmas)->name), 0, 2)) . '</div>';
                                        if ($xtra->leader === NULL){
                                            $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader Yet</div>';
                                        }

                    $output .= '
                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . ($xtra->latest_schedule ? date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) : '') . '</div>
                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($xtra->latest_schedule?->location, 15, '...') . '</div>';
                                        if ($xtra->latest_schedule === NULL){
                                            $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule Yet</div>';
                                        }

                    $output .= '
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            } else{
                return response()->json([
                    'empty' => true
                ]);

            }
        }
        return $output;
    }

    public function show(Extracurricular $xtra){
        return view('/Ketua/Xtrapageketua', ['xtra' => $xtra]);
    }

    public function myclub(){
        $NIP = str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT);
        // dd(extracurricular::latest()->userclub()->get());
        return view('User.myclub', ['xtras' => extracurricular::latest()->userclub($NIP)->filter(request(['search', 'Physique', 'NonPhysique', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']))->get(), 'nip' => $NIP]);
    }
}
