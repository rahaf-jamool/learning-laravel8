<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller{
    public function getAllPostsData(){
        $posts = DB::table('posts')->get();
        return view('posts',compact('posts'));
    }
    public function addPostData(){
        return View('add-post');
    }
    public function storePostData(Request $request){
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return back()->with('post_created','Post has been created successfully');
    }
    public function showPostData($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('update-post',compact('post'));

    }
    public function updatePostData(Request $request){
        DB::table('posts')->where('id',$request->id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return back()->with('post_updated','Post has been updated successfully');
    }
    public function getPostById($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('view-post',compact('post'));
    }
    public function deletePost($id){
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('delete_post','Post has been deleted successfully');
    }
}



