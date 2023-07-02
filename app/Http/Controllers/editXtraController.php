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
        $userMember = NULL;

        $xtra = extracurricular::with(['latest_schedule.presences.members.userXmas', 'members.userXmas', 'leader.userXmas', 'documentations', 'schedules', 'members'])->find($request->kdXtra);


        if(Auth::user()){
            // join jadi member
            $NIP = str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT);
            $userMember = $xtra?->members?->where('NIP', '=', $NIP)->first();

            $members = $xtra->members()->get();
            foreach ($members as $member) {
                if ($member->NIP == $NIP) {
                    if ($userMember->kdState == 2) {
                        // ketua
                        $edits = 'yes';
                        return view('xtrapage', ['xtra' => $xtra, 'userMember' => $userMember, 'edits' => $edits]);
                    }
                    else {
                        // bukan ketua
                        $edits = 'no';
                        return redirect()->route('xtrapage', ['kdXtra' => $request->kdXtra]);
                    }
                }
            }
        }elseif(Auth::user() && !$userMember){
            // non-member
            $userMember = -1;
            $edits = 'no';

            return redirect()->route('xtrapage', ['kdXtra' => $request->kdXtra]);
        }
        // member biasa
        return redirect()->route('xtrapage', ['kdXtra' => $request->kdXtra]);
    }

    public function header(Request $request){
        $xtra = extracurricular::find($request->kdXtra);

        $data = $request -> validate([
            'fileupload' => 'image'
        ]);

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
        if(Auth::user()){
            // join jadi member
            $userMember = $xtra?->members?->where('NIP', '=', str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT))->first();
        }elseif(Auth::user() && !$userMember){
            // non-member
            $userMember = -1;
        }

        $edits = 'yes';

        return redirect()->route('editXtra', ['kdXtra' => $request->kdXtra])->with(['xtra' => $xtra, 'userMember' => $userMember, 'edits' => $edits]);
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
        if(Auth::user()){
            // join jadi member
            $userMember = $xtra?->members?->where('NIP', '=', str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT))->first();
        }elseif(Auth::user() && !$userMember){
            // non-member
            $userMember = -1;
        }

        $edits = 'yes';

        return redirect()->route('editXtra', ['kdXtra' => $request->kdXtra])->with(['xtra' => $xtra, 'userMember' => $userMember, 'edits' => $edits]);

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

        return redirect()->route('editXtra', ['kdXtra' => $request->xtra])->with(['xtra' => $xtra, 'userMember' => $userMember, 'edits' => $edits]);
    }

    public function deletePhoto(Request $request){
        if ($request->photo) {
            $doc = documentation::find($request->photo);
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

        return redirect()->route('editXtra', ['kdXtra' => $request->kdXtra])->with(['xtra' => $xtra, 'userMember' => $userMember, 'edits' => $edits]);

    }

    public function activity(Request $request) {
        $xtra = extracurricular::with('latest_schedule')->find($request->kdXtra);

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

        return redirect()->route('editXtra', ['kdXtra' => $request->kdXtra])->with(['xtra' => $xtra, 'userMember' => $userMember, 'edits' => $edits]);
    }

    public function schedule(Request $request){
        $data = $request -> validate([
            'activity' => 'required',
            'date' => 'required|date',
            'timeStart' => 'required',
            'timeEnd' => 'required',
            'location' => 'required'
        ]);

        $data['kdExtracurricular'] = $request->kdXtra;

        schedule::create($data);

        return redirect()->route('xtrapage', ['kdXtra' => $request->kdXtra])->with('notif', 'Schedule added successfully');
    }
}
