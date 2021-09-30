<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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
    public function innerJoin(){
        $request = DB::table('users')
            ->join('posts','users.id','=','posts.user_id')
            ->select('users.name','posts.title','posts.body')
            ->get();
        return $request;
    }
    public function rightJoinCaluse(){
        $result = DB::table('users')
            ->rightJoin('posts','users.id','=','posts.user_id')
            ->get();
        return $result;
    }
    public function leftJoinCaluse(){
        $result = DB::table('users')
            ->leftJoin('posts','users.id','=','posts.user_id')
            ->get();
        return $result;
    }
    public function getAllPostsModel(){
        $posts = Post::all();
        return $posts;
    }
}



