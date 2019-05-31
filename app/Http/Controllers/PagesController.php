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
        if(\Auth::check())
    {
        return redirect('/user');
    }
    else return view('home.index');
}
    public function user_info(){
    	if(\Auth::check())
    	{
            $batch = User::select('batch')->distinct('batch')->get();
            $post = Post::orderBy('created_at','desc')->get();
            $user_page = 1;
    		return view('user.index',compact('batch','post','user_page'));
    	}else {
    		return view('home.index');
    	}
    } 
    public function user_profile(){
    	if(\Auth::check())
    	{
            $batch = User::select('batch')->distinct('batch')->get();
            $post = Post::where('user_id',\Auth::id())->orderBy('created_at','desc')->get();
            $user_page = 1;
            $profile_page=1;
    		return view('user.index',compact('batch','post','comments','user_page','profile_page'));
    	}else {
    		return view('home.index');
    	}
    } 

    public function details($post){
        $post = Post::find($post);
        $user = User::where('id',$post->user->id)->first();
        //$user = User::all();
        return view('user.single-page',compact('post','user'));
    }

    public function cricket_page(){
        if(\Auth::check())
    	{
/*             $batch = User::select('batch')->distinct('batch')->get();
            $post = Post::where('user_id',\Auth::id())->orderBy('created_at','desc')->get();
            $user_page = 1;
            $profile_page=1; */
    		return view('user.cricket');
    	}else {
    		return view('home.index');
    	}
    }
    public function team_page(){
        if(\Auth::check())
    	{
/*          $batch = User::select('batch')->distinct('batch')->get();
            $post = Post::where('user_id',\Auth::id())->orderBy('created_at','desc')->get();
            $user_page = 1;
            $profile_page=1; */
    		return view('user.team');
    	}else {
    		return view('home.index');
    	}
    }
    public function privacy_page(){
        return view('home.privacy');
    }
}
