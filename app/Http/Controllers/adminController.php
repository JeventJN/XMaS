<?php

namespace App\Http\Controllers;

use App\Models\extracurricular;
use App\Models\member;
use App\Models\report;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    // public function index()
    // {
    //     //
    //     $flag = 1;

    //     $this->authorize('admin');
    //     return view('home')->with('flag', $flag);
    // }

    public function approval(){
        $members = member::where('kdState', '=', '3')->get();

        return view('Admin.approval', compact('members'));
    }

    public function accReq(Request $request){
        $members = extracurricular::find($request->xtra)->members;

        // hapus yang lama
        foreach ($members as $member) {
            if($member->kdState == 2){
                $member->kdState = 1;

                $member->save();
            }
        }

        foreach ($members as $member) {
            if ($member->NIP == $request->NIP) {
                if ($member->kdState == 3) {
                    $member->kdState = 2;

                    $member->save();
                }
            }
        }

        return redirect()->route('approval')->with('appAcc', 'we');
    }

    public function denyReq(Request $request){
        $members = extracurricular::find($request->xtra)->members;

        foreach ($members as $member) {
            if ($member->NIP == $request->NIP) {
                if ($member->kdState == 3) {
                    $member->kdState = 1;

                    $member->save();
                }
            }
        }


        return redirect()->route('approval')->with('denyAcc', 'we');
    }

    public function report(Request $request){
        $report = report::find($request->report);
        // dd($report);

        return view('Admin.reportformA', compact('report'));
    }
}
