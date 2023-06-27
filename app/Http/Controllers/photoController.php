<?php

namespace App\Http\Controllers;

use App\Models\documentation;
use App\Models\extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class photoController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware(function ($request, $next) {
    //         $request->session()->put('photo_added', false); // Set the initial value of photo_added session flag
    //         return $this->photo($request); // Call the photo function and return its response
    //     });
    // }

    public function photo(Request $request){
        $data = [
            'kdExtracurricular' => $request->xtra
        ];

        if ($request->session()->get('photo_added') !== true) {
            if ($request->hasFile('photo')) {
                $request->session()->forget('photo_added');
                $data['photo'] = $request->file('photo')->store('database-assets');
                $request->session()->put('photo_added', true);

                // documentation::create($data);
            }
            // else{
            //     $request->session()->put('photo_added', false);
            // }
        }

        documentation::create($data);


        $xtra = extracurricular::find($request->xtra);
        $xtra->load('documentations');

        $userMember = NULL;
        $edits = 'yes';

        if(Auth::user()){
            // join jadi member
            $userMember = $xtra?->members?->where('NIP', '=', str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT))->first();
        }elseif(Auth::user() && !$userMember){
            // non-member
            $userMember = -1;
        }

        return view('Xtrapage', compact('xtra', 'userMember', 'edits'));
    }
}
