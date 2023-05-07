<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cameraController extends Controller
{
    public function runScript()
    {
        $scriptPath = base_path('scripts/main.py');
        $command = "python \"$scriptPath";
        $output = shell_exec($command);
        return $output;
    }
}
