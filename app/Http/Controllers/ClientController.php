<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost(){
        $response = HTTP::get('http://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    public function addPost(){
        $response = Http::post('http://jsonplaceholder.typicode.com/posts',[
            'user_id'=>1,
            'title'=>'rahaf',
            'body'=>'new post',
        ]);
        return $response->json();
    }
    public function updatePost(){
        $response = HTTP::put('http://jsonplaceholder.typicode.com/posts/1',[
            'user_id'=>1,
            'title'=>'update rahaf',
            'body'=>'update post',
        ]);
        return $response->json();
    }
    public function deletePost($id){
        $response = HTTP::delete('http://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }
}
