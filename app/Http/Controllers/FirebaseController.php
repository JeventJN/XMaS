<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class FirebaseController extends Controller
{
    //
    protected $database;
    protected $tablename;
    public function __construct(Database $database)
    {
        dd('test');
        $this->database = $database;
        $this->tablename = 'Xtra';
    }

    public function addExtra(Request $request){
        $postData = [
            'name' => $request->xtraname,
            'logo' => 'RunningLogo.png',
            'backgroundImage' => 'image_jumbo.png',
            'category' => $request->category
        ];

        $postRef = $this->database->getReference('Xtra')->push($postData);
        if($postRef){
            return redirect('/xtralistA')
            ->with('notif', 'The Xtra "' . $request->xtraname . '" is successfully created');
        }
    }
}
