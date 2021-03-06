<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return View ('login');
    }
    public function loginSubmit(Request $request){
//        return $request->all();
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:12|max:24',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        return 'Email: ' . $email . ' || Password: ' . $password;
    }
}

