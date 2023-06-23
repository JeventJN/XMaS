<?php

namespace App\Http\Controllers;

use App\Models\extracurricular;
use App\Models\member;
use App\Models\presence;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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
            if($request->page == 'xtralist'){
                $data = extracurricular::latest()->filter(request(['search', 'Physique', 'NonPhysique', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']))->get();

                if(count($data) > 0){
                    foreach ($data as $xtra){
                        $output .= '
                        <form action="/xtrapage" method="POST" class="xtraForm" onclick="submitForm(\'' . $xtra->kdExtracurricular . '\')">'
                                . csrf_field() .
                                '<div class="xtraboxcontainer flex justify-center items-center">
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
                            </form>
                        ';
                    }
                } else{
                    return response()->json([
                        'empty' => true
                    ]);
                }
            } elseif ($request->page == 'myclub') {
                $nip = str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT);
                $data = extracurricular::latest()->userclub($nip)->filter(request(['search', 'Physique', 'NonPhysique', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']))->get();

                if(count($data) > 0){
                    foreach ($data as $xtra){
                        $output .= '
                        <form action="/xtrapage" method="POST" class="xtraForm" onclick="submitForm(\'' . $xtra->kdExtracurricular . '\')">'
                            . csrf_field();
                        if($xtra->leader?->NIP == $nip){
                            $output .= '
                                <div class="">
                                    <form action="/xtrapage" method="POST" class="xtraForm" onclick="submitForm(\'' . $xtra->kdExtracurricular . '\')">'
                                        . csrf_field() .
                                        '<div class="flex flex-col">
                                            <div class="xtraboxcontainer flex justify-center items-center">
                                                <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                                    <img src="' .  asset('/Assets/' . $xtra->logo ) . '" alt="' . $xtra->name . '">
                                                </div>
                                                <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                                    <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">' . Str::limit($xtra->name, 12, '...') . '</div>
                                                    <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . implode(' ', array_slice(explode(' ', optional(optional($xtra->leader)->userXmas)->name), 0, 2)) . '</div>';
                                                        if ($xtra->leader === NULL){
                                                            $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader Yet</div>';
                                                        }
                            $output .= '
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . $xtra->latest_schedule ? date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) : '' . '</div>
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($xtra->latest_schedule?->location, 15, '...') . '</div>';
                                                        if ($xtra->latest_schedule === NULL){
                                                            $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule Yet</div>';
                                                        }
                            $output .= '
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="absolute w-fit h-fit flex justify-end mt-[-6vw] ml-[29vw]">
                                        <form action="/editXtra" method="POST">'
                                            . csrf_field() .
                                            '<button>
                                                <img class="w-[2.5vw] h-[2.5vw] hover:scale-[1.1]" src="' . asset('Assets/edit.png') . '" alt="">
                                            </button>
                                            <input type="hidden" name="NIP" value="' . $nip . '">
                                            <input type="hidden" name="kdXtra" value="' .  $xtra->kdXtracurricular  . '">
                                        </form>
                                        <div class="w-[2.5vw] h-[2.5vw]">
                                            <a href="/chat">
                                                <img class="ml-[1.5vw] w-[2.5vw] h-[2.5vw] hover:scale-[1.1]" src="' . asset('Assets/chat.png') . '" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ';
                        } else{
                            $output .= '
                                <div class="">
                                    <form action="/xtrapage" method="POST" class="xtraForm" onclick="submitForm(\'' . $xtra->kdExtracurricular . '\')">'
                                        . csrf_field() .
                                        '<div class="flex flex-col">
                                            <div class="xtraboxcontainer flex justify-center items-center">
                                                <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                                    <img src="' . asset('Assets/' . $xtra->logo)  . '" alt="' .  $xtra->name  . '">
                                                </div>
                                                <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                                    <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">' .  Str::limit($xtra->name, 12, '...')  . '</div>
                                                    <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' .  implode(' ', array_slice(explode(' ', optional(optional($xtra->leader)->userXmas)->name), 0, 2))  . '</div>';
                                                        if ($xtra->leader === NULL){
                                                            $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader Yet</div>';
                                                        }
                            $output .= '
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' .  date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd))  . '</div>
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' .  Str::limit($xtra->latest_schedule?->location, 15, '...')  . '</div>';
                                                        if ($xtra->latest_schedule === NULL){
                                                            $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule Yet</div>';

                                                        }
                            $output .= '
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="absolute w-fit h-fit flex justify-end ml-[33vw] mt-[-6vw]">
                                        <div class="w-[2.5vw] h-[2.5vw]">
                                            <a href="/chat">
                                                <img class=" w-[2.5vw] h-[2.5vw] hover:scale-[1.1]" src="' . asset('Assets/chat.png') . '" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>';
                        }
                    }
                } else{
                    return response()->json([
                        'empty' => true
                    ]);
                }
            }
            return $output;
        }
    }

    public function presenceChange(Request $request){
        // ddd(request(['date', 'kd']));
        if($request->ajax()){
            $output="";
            $data = presence::where('kdSchedule', fn($query) =>
                $query->select('kdSchedule')
                      ->from('schedules')
                      ->where('kdExtracurricular', $request->kd)
                      ->where('date', $request->date)
            )->get();
            // ddd($data);
            if(count($data) > 0){
                $me = $data->where('kdMember', '=', $request->kdMember)->first();
                if ($me != NULL){
                    $output .= '<span class="badgeMePML">' . $me->members?->userXmas?->name . '</span>';
                }
                foreach ($data as $presence){
                    if($request->kdMember != NULL){
                        if ($presence->kdMember != $request->kdMember){
                            $output .= '<span class="badge">'. $presence->members->userXmas->name . '</span>';
                        }
                    }else{
                        $output .= '<span class="badge">'. $presence->members->userXmas->name . '</span>';
                    }
                }
            } else{
                $output .= '<span class="NoPresence"> No presence yet. </span>';
                return response()->json([
                    'empty' => true,
                    'output' => $output
                ]);
            }
        }
        return response()->json([
            'totalPresence' => count($data),
            'output' => $output
        ]);
    }

    // function leaveXtra(Request $request) {
    //     $member = member::where('kdMember', $request->kdMember);

    //     // dd($request->kdMember, $request->kdXtra, $member);
    //     // $member->delete();

    //     return redirect()->route('xtrapage')
    //     ->withInput(['kdXtra' => $request->kdXtra])
    //     ->with('leaveXtra', 'Successfully left the Xtra');
    // }

    public function leaveXtra(Request $request) {
        $member = member::where('kdMember', $request->kdMember);

        $member->delete();

        return redirect()->route('xtrapage', ['kdXtra' => $request->kdXtra])
            // ->withInput(['kdXtra' => $request->kdXtra])
            ->with('notif', 'Successfully left the Xtra');
    }

    public function show(Request $request){
        // ddd($request->kdXtra);
        $xtra = extracurricular::find($request->kdXtra);
        $userMember = NULL;

        // merupakan user
        if(Auth::user()){
            // join jadi member
            $userMember = $xtra?->members?->where('NIP', '=', str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT))->first();
        }elseif(Auth::user() && !$userMember){
            // non-member
            $userMember = -1;
        }

        if($request->flag == 'hai'){
            $edits = 'yes';
        }
        else{
            $edits = 'no';
        }
        session(['previousUrl' => $request->url()]);
        // ddd($userMember, $request->kdXtra);
        return view('xtrapage', ['xtra' => $xtra, 'userMember' => $userMember, 'edits' => $edits]);
    }

    public function myclub(){
        $NIP = str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT);
        // dd(Auth::user()->NIP);
        // dd(extracurricular::latest()->userclub()->get());
        return view('User.myclub', ['xtras' => extracurricular::latest()->userclub($NIP)->filter(request(['search', 'Physique', 'NonPhysique', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']))->get(), 'nip' => $NIP]);
    }

    public function xtraListA(){
        return view('Admin.xtralistA', [
            'xtras' => extracurricular::latest()->filter(request(['search', 'Physique', 'NonPhysique', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']))->get()
        ]);
    }

    public function deleteXtra(Request $request) {
        // dd($request->kdXtra);
        $xtra = extracurricular::where('kdExtracurricular', $request->kdXtra)->first();
        $name = $xtra->name;
        $xtra->delete();

        return redirect('xtralistA')
            ->with('notif', 'The Xtra "' . $name . '" is successfully deleted');
    }

    public function createXtra(Request $request) {
        // dd($request->kdXtra);
        // $xtra = extracurricular::where('kdExtracurricular', $request->kdXtra)->first();
        // $name = $xtra->name;
        // $xtra->delete();

        // return redirect('xtralistA')
        //     ->with('notif', 'The Xtra "' . $name . '" is successfully deleted');
    }
}
