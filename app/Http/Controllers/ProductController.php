<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $sport = array('');
        return view('welcome',compact('sport'));
    }
}
