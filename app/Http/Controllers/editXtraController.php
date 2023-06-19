<?php

namespace App\Http\Controllers;

use App\Models\documentation;
use App\Models\extracurricular;
use App\Models\schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class editXtraController extends Controller
{
    //
    public function route(Request $request){
        // dd('route');
        // dd($request->NIP);
        // $NIP = str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT);
        $userMember = NULL;
        // dd($NIP);

        // $xtra = extracurricular::find($request->kdXtra);
        $xtra = extracurricular::find(1);
        if(Auth::user()){
            // join jadi member
            $userMember = $xtra?->members?->where('NIP', '=', str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT))->first();
        }elseif(Auth::user() && !$userMember){
            // non-member
            $userMember = -1;
        }

        // dd($xtra);

        // return view('xtrapage', ['xtra' => $xtra, 'userMember' => $userMember, 'edits' => 'yes']);
        // return redirect()->route('xtrapage', $request->kdXtra)->with(['xtra' => $xtra, 'userMember' => $userMember, 'edits' => 'yes']);


        // return redirect()->route('xtrapage')
        return view('xtrapage', ['xtra' => $xtra, 'userMember' => $userMember, 'edits' => 'yes']);

    }

    public function photo(Request $request){
        // dd('masuk photo');
        $data = [
            'kdExtracurricular' => $request->xtra
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('database-assets');
        }

        documentation::create($data);

        $xtra = extracurricular::find($request->xtra);
        $userMember = NULL;
        $edits = null;

        if(Auth::user()){
            // join jadi member
            $userMember = $xtra?->members?->where('NIP', '=', str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT))->first();
        }elseif(Auth::user() && !$userMember){
            // non-member
            $userMember = -1;
        }

        return view('Xtrapage', compact('xtra', 'userMember', 'edits'));

        // $this->activity($request);

        // return redirect()->route('editXtra.activity');
    }

    public function activity(Request $request) {
        $xtra = extracurricular::find($request->kdXtra);

        $xtra->description = $request->descriptiontextarea;
        $xtra->save();

        $schedule = Schedule::where('kdExtracurricular', '=', $request->kdXtra)->latest('date')->first();
        $schedule->activity = $request->activitytextarea;

        $schedule->save();

        $xtra->refresh();

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

        // return redirect()->route('editXtra');

        // return redirect()->route('xtrapage', ['kdXtra' => $request->kdXtra]);
        // return redirect()->route('xtrapage', ['kdXtra' => $request->xtra])
        //     // ->withInput(['kdXtra' => $request->kdXtra])
        //     ->with('notif', 'Successfully left the Xtra');

        // return redirect()->route('xtrapage', ['kdXtra' => $request->kdXtra])
        //     // ->withInput(['kdXtra' => $request->kdXtra])
        //     ->with('notif', 'Successfully left the Xtra');
    }
}
