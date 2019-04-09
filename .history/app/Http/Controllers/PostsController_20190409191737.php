<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public  function store(Request $request){
        Post::create($request->all());
        return redirect('/user')->with('post_create','successfully');
    }

}
