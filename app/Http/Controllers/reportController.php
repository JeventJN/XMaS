<?php

namespace App\Http\Controllers;

// use App\Models\extracurricular;

use App\Models\extracurricular;
use App\Models\member;
use App\Models\report;
use App\Models\schedule;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function index() {
        $reports = report::all();
        // $reports = report::all()->filter(request(['search', 'Physique', 'NonPhysique', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']))->get();

        return view('Admin.reportlist', ['reports' => $reports]);
    }

    public function reportKetua(Request $request) {
        // ambil xtra yang dia jadi ketua
        $members = member::where('NIP', "=", $request->NIP)->get();
        // dd($members);

        foreach ($members as $member) {
            if($member->kdState == 2){
                return view('Ketua.reportform', compact('member'));
                break;
            }
        }
    }

    public function new(Request $request){

        // report::create([
        //     'kdSchedule' => '1',
        //     'kdState' => '3',
        //     'title' => $request->title,
        //     'explanation' => $request->explanation,
        //     'photo' => $request->file('photo')->store('database-assets')
        // ]);

        // schedule::create
        // $xtra = null;

        // $members = member::where('NIP', '=', $request->NIP)->get(); //pkae where, lalu cek kdstatenya
        // // dd($members);
        // foreach($members as $member){
        //     if($member->kdState == 2){
        //         // ketua
        //         break;
        //     }
        // }
        // dd($request->kdMember);
        $member = member::find($request->kdMember);

        $xtra = extracurricular::find($member->kdExtracurricular);

            // $schedules = schedule::where('kdExtracurricular', '=', $xtra->kdExtracurricular)->get();
            // $schedule = $schedules->latest()->get();

        $schedule = schedule::where('kdExtracurricular', '=', $xtra->kdExtracurricular)->latest()->first();

        $data = [
            // kdschedule di report controller ambil dari schedule yang terakhir dari ketua ekskulnya
            'kdSchedule' => $schedule->kdSchedule,
            'kdState' => '3',
            'title' => $request->title,
            'explanation' => $request->explanation,
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('database-assets');
        }

        report::create($data);

        return redirect()->route('profile')->with('reportSent', 'we');
    }
}
