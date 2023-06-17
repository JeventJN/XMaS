<?php

namespace App\Http\Controllers;

use App\Models\documentation;
use App\Models\extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class editXtraController extends Controller
{
    //
    public function route(Request $request){
        $xtra = extracurricular::find($request->kdXtra);

        $userMember = $xtra->members?->where('NIP', '=', $request->NIP)->first();

        // return view('xtrapage', ['xtra' => $xtra, 'userMember' => $userMember, 'edits' => 'yes']);
        return view('xtrapage', ['xtra' => $xtra, 'userMember' => $userMember, 'edits' => 'yes']);
        // return redirect()->route('xtrapage', $request->kdXtra)->with(['xtra' => $xtra, 'userMember' => $userMember, 'edits' => 'yes']);


        // return redirect()->route('xtrapage')
        // return view('home', ['xtras' => $xtras, 'reports' => $reports, 'kosong' => 'we']);

    }

    public function photo(Request $request){
        $data = [
            'kdExtracurricular' => $request->xtra
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('database-assets');
        }

        documentation::create($data);

        $xtra = extracurricular::find($request->xtra);
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
