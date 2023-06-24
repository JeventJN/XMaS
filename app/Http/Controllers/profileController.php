<?php

namespace App\Http\Controllers;

use App\Models\extracurricular;
use App\Models\member;
use App\Models\userXmas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class profileController extends Controller
{
    //

    function updateImage(Request $request){
        $NIP = str_pad($request->NIP, 4, '0', STR_PAD_LEFT);
        $user = userXmas::find($NIP);

        $data = $request -> validate([
            'fileupload' => 'image'
        ]);

        if ($request->file('fileupload')) {
            if ($user->photo) {
                Storage::delete($user->photo);
            }
            $data['fileupload'] = $request->file('fileupload')->store('database-assets');

            $user->photo = $data['fileupload'];
            $user->save();
        }

        return redirect('/profile');
    }

    function updatePhone(Request $request) {
        $NIP = str_pad($request->NIP, 4, '0', STR_PAD_LEFT);
        $user = userXmas::find($NIP);


        if (!Str::startsWith($request->phone, '62')) {
            $user->phoneNumber = '62' . substr($request->phone, 1);
        }
        else {
            $user->phoneNumber = $request->phone;
        }


        $user->save();
        return redirect('/profile');


    }

    function xtras(Request $request){
        $NIP = str_pad($request->NIP, 4, '0', STR_PAD_LEFT);
        $anggota = userXmas::find($NIP)->members;

        return view('User.profile', compact('anggota'));

    }

    function requestLead(Request $request){
        $members = extracurricular::find($request->xtrachs)->members;
        $anggota = member::all();

        $NIP = str_pad($request->NIP, 4, '0', STR_PAD_LEFT);

        foreach($anggota as $member){
            if($member->kdState == 2){
                if($member->NIP == $NIP){
                    return redirect('profile')->with('alrLeader', 'Gaboleh lagi');
                }
            }
        }

        foreach ($members as $member) {
            if ($member->NIP == $NIP) {
                if ($member->kdState == 1) {
                    $member->kdState = 3;

                    $member->save();
                }
            }
        }

        return redirect('profile')->with('wait', 'Tunggu ya');
    }
}
