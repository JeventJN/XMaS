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
        $reports = report::latest()->filter(request(['search', 'pending', 'accepted', 'denied']))->get()->sortBy('kdState');

        if(request('sort') == 'asc'){
            $reports = $reports->sortBy('schedules.date');
        } elseif(request('sort') == 'desc'){
            $reports = $reports->sortByDesc('schedules.date');
        }

        return view('Admin.reportlist', ['reports' => $reports]);
    }

    public function searchLive(Request $request){
        if($request->ajax()){
            $output="";
            $data = report::latest()->filter(request(['search', 'pending', 'accepted', 'denied']))->get()->sortBy('kdState');
            if(request('sort') == 'asc'){
                $data = $data->sortBy('schedules.date');
            } elseif(request('sort') == 'desc'){
                $data = $data->sortByDesc('schedules.date');
            }

            if(count($data) > 0){
                foreach ($data as $report){
                    if ($report->kdState == "4"){
                        $output .= '
                            <form action="/reportformA" method="POST" class="reportForm" onclick="submitForm(\'' . $report->kdReport . '\')">'
                                . csrf_field() .
                                '<div class="flex flex-col">
                                    <div class="decborder absolute w-[7.8vw] h-[2.4vw] flex justify-center items-center rounded-[5vw] bg-green-600 mt-[3vw] ml-[29vw]">
                                        <div class="text-[1.4vw] text-white font-nunito font-semibold">Accepted</div>
                                    </div>
                                    <div class="xtraboxcontainer flex justify-center items-center" onmouseover="changeBorderColor(this.parentNode, \'white\')" onmouseout="changeBorderColor(this.parentNode, \'black\')">
                                        <div class="mr-[0.5vw] xtrabox flex justify-center items-center">';
                                            if (Str::contains($report->photo, 'database-assets')){
                                                $output .= '
                                                    <img src="' . asset('storage/' . $report->photo) . '" alt="' . $report->title . '" style="object-fit: cover">
                                                ';
                                            }else {
                                                $output .= '
                                                    <img src="' . asset('Assets/' . $report->photo) . '" alt="' . $report->title . '" style="object-fit: cover">
                                                ';
                                            }
                        $output .= '
                                        </div>
                                        <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                            <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">' . Str::limit($report->title, 12, '...') . '</div>
                                            <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($report->schedules?->xtras->name, 14, '...') . '</div>
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($report->schedules?->xtras?->leader?->userXmas?->name, 14, '...') . '</div>';
                                                if ($report->schedules?->xtras?->leader?->userXmas?->name === NULL){
                                                    $output .= '
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader</div>
                                                    ';
                                                }
                        $output .= '
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . $report->schedules ? date('d M Y', strtotime($report->schedules?->date)) : ''. '</div>';
                                                if ($report->schedules === NULL){
                                                    $output .= '
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule</div>
                                                    ';
                                                }
                        $output .= '
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        ';

                    }elseif ($report->kdState == "5"){
                        $output .= '
                            <form action="/reportformA" method="POST" class="reportForm" onclick="submitForm(\'' . $report->kdReport . '\')">'
                                . csrf_field() .
                                '<div class="flex flex-col">
                                    <div class="decborder absolute w-[7.8vw] h-[2.4vw] flex justify-center items-center rounded-[5vw] bg-red-500 mt-[3vw] ml-[29vw]">
                                        <div class="text-[1.4vw] text-white font-nunito font-semibold">Denied</div>
                                    </div>
                                    <div class="xtraboxcontainer flex justify-center items-center" onmouseover="changeBorderColor(this.parentNode, \'white\')" onmouseout="changeBorderColor(this.parentNode, \'black\')">
                                        <div class="mr-[0.5vw] xtrabox flex justify-center items-center">';
                                            if (Str::contains($report->photo, 'database-assets')){
                                                $output .= '
                                                    <img src="' . asset('storage/' . $report->photo) . '" alt="' . $report->title . '" style="object-fit: cover">
                                                ';
                                            }else {
                                                $output .= '
                                                    <img src="' . asset('Assets/' . $report->photo) . '" alt="' . $report->title . '" style="object-fit: cover">
                                                ';
                                            }
                        $output .= '
                                        </div>
                                        <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                            <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">' . Str::limit($report->title, 12, '...') . '</div>
                                            <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($report->schedules?->xtras->name, 14, '...') . '</div>
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($report->schedules?->xtras?->leader?->userXmas?->name, 14, '...') . '</div>';
                                                if ($report->schedules?->xtras?->leader?->userXmas?->name === NULL){
                                                    $output .= '
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader</div>
                                                    ';
                                                }
                        $output .= '
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . $report->schedules ? date('d M Y', strtotime($report->schedules?->date)) : ''. '</div>';
                                                if ($report->schedules === NULL){
                                                    $output .= '
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule</div>
                                                    ';
                                                }
                        $output .= '
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        ';
                    }else {
                        $output .= '
                            <form action="/reportformA" method="POST" class="reportForm" onclick="submitForm(\'' . $report->kdReport . '\')">'
                                . csrf_field() .
                                '<div class="flex flex-col">
                                    <div class="xtraboxcontainer flex justify-center items-center">
                                        <div class="mr-[0.5vw] xtrabox flex justify-center items-center">';
                                            if (Str::contains($report->photo, 'database-assets')){
                                                $output .= '
                                                    <img src="' . asset('storage/' . $report->photo) . '" alt="' . $report->title . '" style="object-fit: cover">
                                                ';
                                            }else {
                                                $output .= '
                                                    <img src="' . asset('Assets/' . $report->photo) . '" alt="' . $report->title . '" style="object-fit: cover">
                                                ';
                                            }
                        $output .= '
                                        </div>
                                        <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                            <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">' . Str::limit($report->title, 12, '...') . '</div>
                                            <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($report->schedules?->xtras->name, 14, '...') . '</div>
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . Str::limit($report->schedules?->xtras?->leader?->userXmas?->name, 14, '...') . '</div>';
                                                if ($report->schedules?->xtras?->leader?->userXmas?->name === NULL){
                                                    $output .= '
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader</div>
                                                    ';
                                                }
                        $output .= '
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">' . $report->schedules ? date('d M Y', strtotime($report->schedules?->date)) : ''. '</div>';
                                                if ($report->schedules === NULL){
                                                    $output .= '
                                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule</div>
                                                    ';
                                                }
                        $output .= '
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        ';
                    }
                }
            } else{
                return response()->json([
                    'empty' => true
                ]);
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
