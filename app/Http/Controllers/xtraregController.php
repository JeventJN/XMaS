<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extracurricular;
use App\Models\member;
use App\Models\userXmas;

class xtraregController extends Controller
{
    public function xtra()
    {
        return view('User.xtrareg', ['xtras' => extracurricular::latest()->get()]);
    }

    public function newMember(Request $request)
    {
        $xtra = extracurricular::find($request->kdExtracurricular);

        // $member->NIP = $userXmas->NIP;

        // $member = new Member;
        // $member->NIP = auth()->user()->NIP;
        // $member->kdExtracurricular = $xtra->kdExtracurricular;
        // $member->kdState = 1;
        // $member->reason = $request->reason;
        // $member->save();

        // dd($request);
        member::create([
            'NIP' => $request->user,
            'kdExtracurricular' => $request->xtrachs,
            'kdState' => '1',
            'reason' => $request->reason
        ]);

        return redirect('myclub')->with('JoinSuccess');
    }

}
