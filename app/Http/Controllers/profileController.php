<?php

namespace App\Http\Controllers;

use App\Models\userXmas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        return view('User.profile');
    }
}
