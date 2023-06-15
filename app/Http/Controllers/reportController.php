<?php

namespace App\Http\Controllers;

// use App\Models\extracurricular;
use App\Models\member;
use App\Models\report;
use Illuminate\Http\Request;

class reportController extends Controller
{
    //
    public function reportKetua(Request $request) {
        // ambil xtra yang dia jadi ketua
        $members = member::where('NIP', "=", $request->NIP)->get();
        // dd($members);

        foreach ($members as $member) {
            if($member->kdState == 2){
                return view('Ketua.reportform', compact('member'));
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

        $data = [
            'kdSchedule' => '1',
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
