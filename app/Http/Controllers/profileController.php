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
        $user = userXmas::find($request->NIP);

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
        $user = userXmas::find($request->NIP);


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
        $anggota = userXmas::find($request->NIP)->members;

        return view('User.profile', compact('anggota'));

    }

    function requestLead(Request $request){
        $members = extracurricular::find($request->xtrachs)->members;

        foreach ($members as $member) {
            if ($member->NIP == $request->NIP) {
                if ($member->kdState == 1) {
                    $member->kdState = 3;

                    $member->save();
                }
            }
        }

        return redirect('profile')->with('wait', 'Tunggu ya');
    }
}
