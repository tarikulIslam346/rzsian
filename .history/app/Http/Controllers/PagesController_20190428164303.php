<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Post;
use App\Comment;

class PagesController extends Controller
{
    //
    public function home(){
    	return view('home.index');
    }
    public function user_info(){
    	if(\Auth::check())
    	{
            $batch = User::select('batch')->distinct('batch')->get();
            $post = Post::all();
    		return view('user.index',compact('batch','post','comments'));
    	}else {
    		return view('home.index');
    	}
    } 

    public function details($post){
        $post = Post::find($post);
        $user = User::where('id',$post->user->id)->first();
        return view('user.single-page',compact('post','user'));
    }
}
