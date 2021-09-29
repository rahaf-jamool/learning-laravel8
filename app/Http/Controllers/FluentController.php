<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class FluentController extends Controller
{
    public function index(){
        $slice = Str::after('This is my name', 'This is');
        echo $slice .'<br>';
        $slice2 = Str::afterLast('App\Http\Controllers\rahaf', '\\');
        echo $slice2 .'<br>';
        $slice3 = Str::of('hello ')->append('world!');
        echo $slice3 .'<br>';
    }
}

