<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home/{name?}', [App\Http\Controllers\HomeController::class,'index'])->name('home.index');
Route::get('/user',['App\Http\Controllers\UserController','index'])->name('user.index');
Route::get('/',[ProductController::class,'index'])->name('product.index');
Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getallpost');
Route::get('/add-post',[ClientController::class,'addPost'])->name('posts.addpost');
Route::get('/update-post',[ClientController::class,'updatePost'])->name('posts.updatepost');
Route::get('/delete-post/{id}',[ClientController::class,'deletePost'])->name('posts.deletepost');
Route::get('/fluentstring',[FluentController::class,'index'])->name('fluentstring.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkuser');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.getsessiondata');
Route::get('/session/create',[SessionController::class,'storeSessionData'])->name('session.createsessiondata');
Route::get('/session/delete',[SessionController::class,'deleteSessionData'])->name('session.deletesessiondata');
//databases
//get all data
Route::get('/posts/getAll',[PostController::class,'getAllPostsData'])->name('posts.getData');
//create
Route::get('/posts/add',[PostController::class,'addPostData'])->name('posts.add');
Route::post('/posts/create',[PostController::class,'storePostData'])->name('posts.create');
//update
Route::get('/posts/edit/{id}',[PostController::class,'showPostData'])->name('posts.edit');
Route::post('/posts/update',[PostController::class,'updatePostData'])->name('posts.update');
//view
Route::get('post/view/{id}',[PostController::class,'getPostById'])->name('post.view');
//delete
Route::get('deletepost/{id}',[PostController::class,'deletePost'])->name('post.deletepost');
//join user id
Route::get('posts/join/userid',[PostController::class,'innerJoin'])->name('join.userId');
Route::get('posts/rightjoin/userid',[PostController::class,'rightJoinCaluse'])->name('rightjoin.userId');
Route::get('posts/leftjoin/userid',[PostController::class,'leftJoinCaluse'])->name('leftjoin.userId');
//Models
Route::get('posts/get',[PostController::class,'getAllPostsModel'])->name('PostsModel.getAll');
