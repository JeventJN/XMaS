<?php

namespace App\Http\Controllers;

use App\Models\documentation;
use App\Models\extracurricular;
use App\Models\schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;



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
        $xtra = extracurricular::find($request->kdXtra);
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

    public function header(Request $request){
        $xtra = extracurricular::find($request->kdXtra);

        $data = $request -> validate([
            'fileupload' => 'image'
        ]);
        // dd('masuk header 1');

        if ($request->fileupload) {
            $old = null;
            if ($xtra->backgroundImage) {
                $old = $xtra->backgroundImage;
                // dd('masuk headerHapus');
            }

            // dd('masuk header 2');
            $data['fileupload'] = $request->file('fileupload')->store('database-assets');
            $xtra->backgroundImage = $data['fileupload'];
            $xtra->save();
            Storage::delete($old);
        }

        $userMember = NULL;
        $xtra = extracurricular::find(1);
        if(Auth::user()){
            // join jadi member
            $userMember = $xtra?->members?->where('NIP', '=', str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT))->first();
        }elseif(Auth::user() && !$userMember){
            // non-member
            $userMember = -1;
        }

        return view('xtrapage', ['xtra' => $xtra, 'userMember' => $userMember, 'edits' => 'yes']);
    }

    public function logo(Request $request){
        $xtra = extracurricular::find($request->kdXtra);

        $data = $request -> validate([
            'fileupload1' => 'image'
        ]);

        if ($request->fileupload1) {
            $old = null;
            if ($xtra->logo) {
                $old = $xtra->logo;
            }

            $data['fileupload1'] = $request->file('fileupload1')->store('database-assets');
            $xtra->logo = $data['fileupload1'];
            $xtra->save();
            Storage::delete($old);
        }

        $userMember = NULL;
        $xtra = extracurricular::find(1);
        if(Auth::user()){
            // join jadi member
            $userMember = $xtra?->members?->where('NIP', '=', str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT))->first();
        }elseif(Auth::user() && !$userMember){
            // non-member
            $userMember = -1;
        }

        return view('xtrapage', ['xtra' => $xtra, 'userMember' => $userMember, 'edits' => 'yes']);
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

        $request->session()->put('photo', null);
        $request->session()->save();

        return view('Xtrapage', compact('xtra', 'userMember', 'edits'));
        // return redirect()->back();

        // $this->activity($request);

        // return redirect()->route('editXtra.activity');
    }

    public function deletePhoto(Request $request){
        if ($request->photo) {
            $doc = documentation::where('photo', '=', $request->photo)->first();
            if ($doc->photo) {
                Storage::delete($doc->photo);
            }
            $doc->delete();
        }

        $xtra = extracurricular::find($request->kdXtra);

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

    public function schedule(Request $request){
        $data = $request -> validate([
            'activity' => 'required',
            'date' => 'required|date',
            'timeStart' => 'required',
            'timeEnd' => 'required',
            'location' => 'required'
        ]);

        // dd($data);
        $data['kdExtracurricular'] = $request->kdXtra;

        schedule::create($data);

        return redirect()->route('xtrapage', ['kdXtra' => $request->kdXtra])->with('scheduleAdded', 'yes');
    }
}
