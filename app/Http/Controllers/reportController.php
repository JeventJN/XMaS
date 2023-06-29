<?php

namespace App\Http\Controllers;

// use App\Models\extracurricular;

use App\Models\extracurricular;
use App\Models\member;
use App\Models\report;
use App\Models\schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class reportController extends Controller
{
    public function index() {
        // $reports = report::all()->sortBy('kdState');
        $reports = report::latest()->filter(request(['search', 'pending', 'accepted', 'denied', 'asc', 'desc']))->get()->sortBy('kdState');

        if(request('asc')){
            $reports = $reports->sortBy('schedules.date');
        } elseif(request('desc')){
            $reports = $reports->sortByDesc('schedules.date');
        }

        return view('Admin.reportlist', ['reports' => $reports]);
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
                                    <div class="mr-[0.5vw] xtrabox flex justify-center items-center">';
                                        if (Str::contains($xtra->logo, 'database-assets')){
                                            $output .= '<img src="' . asset('storage/' . $xtra->logo) . '" alt="' . $xtra->name . '" style="object-fit: cover">';

                                        }else{
                                            $output .= '<img src="' . asset('Assets/' . $xtra->logo) . '" alt="' . $xtra->name . '" style="object-fit: cover">';
                                        }
                        $output .= '
                                    </div>
                                    <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                        <div class="text-[1.9vw] font-bold underline mb-[1vw]">' . Str::limit($xtra->name, 12, '...') .'</div>
                                        <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                            <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($xtra->leader?->userXmas?->name, 14, '...') . '</div>';
                                            if ($xtra->leader === NULL){
                                                $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader Yet</div>';
                                            }

                        $output .= '
                                            <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . ($xtra->latest_schedule ? date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) : '') . '</div>
                                            <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($xtra->latest_schedule?->location, 14, '...') . '</div>';
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
                                                <div class="mr-[0.5vw] xtrabox flex justify-center items-center">';
                                                    if (Str::contains($xtra->logo, 'database-assets')){
                                                        $output .= '<img src="' . asset('storage/' . $xtra->logo) . '" alt="' . $xtra->name . '" style="object-fit: cover">';

                                                    }else{
                                                        $output .= '<img src="' . asset('Assets/' . $xtra->logo) . '" alt="' . $xtra->name . '" style="object-fit: cover">';
                                                    }
                            $output .= '
                                                </div>
                                                <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                                    <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">' . Str::limit($xtra->name, 12, '...') . '</div>
                                                    <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($xtra->leader?->userXmas?->name, 14, '...') . '</div>';
                                                        if ($xtra->leader === NULL){
                                                            $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader Yet</div>';
                                                        }
                            $output .= '
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . ($xtra->latest_schedule ? date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) : '') . '</div>
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($xtra->latest_schedule?->location, 14, '...') . '</div>';
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
                                                <div class="mr-[0.5vw] xtrabox flex justify-center items-center">';
                                                    if (Str::contains($xtra->logo, 'database-assets')){
                                                        $output .= '<img src="' . asset('storage/' . $xtra->logo) . '" alt="' . $xtra->name . '" style="object-fit: cover">';

                                                    }else{
                                                        $output .= '<img src="' . asset('Assets/' . $xtra->logo) . '" alt="' . $xtra->name . '" style="object-fit: cover">';
                                                    }
                            $output .= '
                                                </div>
                                                <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                                    <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">' .  Str::limit($xtra->name, 12, '...')  . '</div>
                                                    <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' .  Str::limit($xtra->leader?->userXmas?->name, 14, '...')  . '</div>';
                                                        if ($xtra->leader === NULL){
                                                            $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader Yet</div>';
                                                        }
                            $output .= '
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' .  ($xtra->latest_schedule ? date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) : '')  . '</div>
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' .  Str::limit($xtra->latest_schedule?->location, 14, '...')  . '</div>';
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
            } elseif ($request->page == 'xtralistA') {
                $data = extracurricular::latest()->filter(request(['search', 'Physique', 'NonPhysique', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']))->get();

                if(count($data) > 0){
                    $output .= '
                            <div id="showmodalA"class="flex flex-col">
                                <div class="xtraboxcontainer flex justify-center items-center">
                                    <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15vw" height="15vw"
                                            viewBox="0 0 256 256">
                                            <path fill="currentColor"
                                                d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24Zm0 192a88 88 0 1 1 88-88a88.1 88.1 0 0 1-88 88Zm48-88a8 8 0 0 1-8 8h-32v32a8 8 0 0 1-16 0v-32H88a8 8 0 0 1 0-16h32V88a8 8 0 0 1 16 0v32h32a8 8 0 0 1 8 8Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        ';

                    foreach ($data as $xtra){
                        $output .= '
                        <div class="flex flex-col">
                            <form action="/xtrapage" method="POST" class="xtraForm" onclick="submitForm(\'' . $xtra->kdExtracurricular . '\')">'
                                . csrf_field() .
                                '<div class="xtraboxcontainer flex justify-center items-center">
                                    <div class="mr-[0.5vw] xtrabox flex justify-center items-center">';
                                        if (Str::contains($xtra->logo, 'database-assets')){
                                            $output .= '<img src="' . asset('storage/' . $xtra->logo) . '" alt="' . $xtra->name . '" style="object-fit: cover">';

                                        }else{
                                            $output .= '<img src="' . asset('Assets/' . $xtra->logo) . '" alt="' . $xtra->name . '" style="object-fit: cover">';
                                        }
                        $output .= '
                                    </div>
                                    <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                        <div class="text-[1.9vw] font-bold underline mb-[1vw]">' . Str::limit($xtra->name, 12, '...') .'</div>
                                        <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                            <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($xtra->leader?->userXmas?->name, 14, '...') . '</div>';
                                            if ($xtra->leader === NULL){
                                                $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader Yet</div>';
                                            }

                        $output .= '
                                            <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . ($xtra->latest_schedule ? date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) : '') . '</div>
                                            <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($xtra->latest_schedule?->location, 14, '...') . '</div>';
                                            if ($xtra->latest_schedule === NULL){
                                                $output .= '<div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule Yet</div>';
                                            }

                        $output .= '
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="absolute w-fit h-fit flex justify-end mt-[17vw] ml-[33vw]">
                                <div class="w-[2.5vw] h-[2.5vw]">
                                    <img class="w-[2.5vw] h-[3vw] scale-[0.8] hover:scale-[1]" id="sampahbtn" src="'. asset('Assets/delete.png') . '" alt="" onclick="del(\'' . $xtra->kdExtracurricular . '\')">
                                </div>
                            </div>
                        </div>
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
    }

    public function reportKetua(Request $request) {
        // ambil xtra yang dia jadi ketua
        $NIP = str_pad(Auth::User()->NIP, 4, '0', STR_PAD_LEFT);
        $members = member::where('NIP', "=", $NIP)->get();
        // dd($members);

        foreach ($members as $member) {
            if($member->kdState == 2){
                return view('Ketua.reportform', compact('member'));
                break;
            }
        }
    }

    public function new(Request $request){
        $member = member::find($request->kdMember);

        // $xtra = extracurricular::find($member->kdExtracurricular);

        $schedule = Schedule::where('date', '=', $request->reportdate)->first();
        // dd($schedule);

        $data = [
            // kdschedule di report controller ambil dari schedule yang terakhir dari ketua ekskulnya
            'kdSchedule' => $schedule->kdSchedule,
            'kdState' => '3',
            'title' => $request->title,
            'explanation' => $request->explanation,
        ];
        // dd($schedule);
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('database-assets');
        }

        report::create($data);

        return redirect()->route('profile')->with('reportSent', 'we');
    }
}
