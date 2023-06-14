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
        $members = extracurricular::find($request->xtrachs)->members;

        $flag = 0;

        foreach ($members as $member) {
            if ($member->NIP == $request->user) {
                $flag = 1;
            }
        }
        // dd($flag);

        if ($flag != 1) {
            $NIP = str_pad($request->user, 4, '0', STR_PAD_LEFT);
            member::create([
                'NIP' => $NIP,
                'kdExtracurricular' => $request->xtrachs,
                'kdState' => '1',
                'reason' => $request->reason
            ]);
            return redirect('myclub')->with('JoinSuccess', 'we');
        }
        else {
            return redirect('xtrareg')->with('AlreadyJoined', 'we');
        }

    }

}
