<?php

namespace App\Http\Controllers;

use App\Models\documentation;
use App\Models\extracurricular;
use App\Models\presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class attendanceController extends Controller
{
    //

    public function attendancePage($kdXtra){
        $xtra = extracurricular::with(['members.userXmas', 'schedules'])->find($kdXtra);
        $members = $xtra->members()->with('userXmas')->get();

        $flag = 0;

        foreach ($members as $member) {
            $NIP = str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT);
            if ($member->NIP == $NIP) {
                if($member->kdState == 2){
                    $flag = 1;
                }
            }
        }

        $schedules = $xtra->schedules()->get();

        if ($flag == 1) {
            return view('Ketua.attendance', compact('xtra', 'members', 'schedules'));
        }
        else {
            return redirect()->route('xtrapage', ['kdXtra' => $kdXtra]);
        }

    }

    public function attendance(Request $request) {
        $attendanceKd = $request->input('attendanceKd');
        $membersKd = json_decode($attendanceKd, true);

        $presences = presence::all();

        foreach ($presences as $presence) {
            if ($presence->kdSchedule == $request->schedule) {
                $presence->delete();
            }
        }

        foreach ($membersKd as $kdMember) {
            presence::create([
                'kdSchedule' => $request->schedule,
                'kdMember' => $kdMember
            ]);
        }


        if ($request->hasFile('photo')) {
            $data = [
                'kdExtracurricular' => $request->kdXtra
            ];
            $data['photo'] = $request->file('photo')->store('database-assets');

            documentation::create($data);
        }


        return redirect()->route('xtrapage', ['kdXtra' => $request->kdXtra])->with('notif', 'Attendance is successfully saved');
    }
}
