<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request){
        if($request->session()->has('name')) {
            echo $request->session()->get('name');
        }else{
            echo 'No Data IN This Session';
        }
    }
    public function storeSessionData(Request $request){
        $request->session()->put('name','alaa');
        echo 'data has benn added to the session';
    }
    public function deleteSessionData(Request $request){
        $request->session()->forget('name');
        echo 'data has been delete from the session';
    }
}

