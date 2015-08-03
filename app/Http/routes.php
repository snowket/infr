<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Requests\PostCreate;
use App\User;
use App\Post;


Route::get('/', function () {
    return view('welcome');
});


resource('posts','PostsController');

//Route::get('posts',function(){
//    $post=App\Post::with('user')->Order()->get();
//    return view('posts',compact('post'));
//});
//get('posts/create',array('as'=>'post',function(){
//    $users=User::lists('username','id');
//    return view('create_post',compact('users'));
//}));
//post('posts',array('as'=>'create_post',function(PostCreate $request){
//    $user=User::find($request->input('user'));
//    $post=new Post;
//    $post->title=$request->input('title');
//    $post->body=$request->input('body');
//    $user->Post()->save($post);
//
//
//    return redirect('posts');
//
//
//}));