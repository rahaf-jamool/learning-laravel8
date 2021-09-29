<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
//    public function index(){
//        $users = array(
//          'name'=>'rahaf',
//          'phone'=>'123',
//          'email'=>'rahaf@example.com',
//        );
//        return view('user',compact('users'));
//    }
    public function index(Request $request){
//        return $request->method();
        return $request->path();
    }
}
