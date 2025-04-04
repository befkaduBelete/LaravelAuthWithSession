<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function getSession(Request $request)
    {
        if ($request->session()->has('channel')) {
            echo $request->session()->get('channel');
        } else {
            echo "Session not exist";
        }
    }

    public function storeSession(Request $request)
    {
        $request->session()->put('channel', 'Learning Points');
        echo "Session is stored";
    }

    public function deleteSession(Request $request){
        $request->session()->forget('channel');
        echo "Session value delete";
    }
}
