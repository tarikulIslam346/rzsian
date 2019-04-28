<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public  function store(Request $request){
        $user_id = request('user_id').intval();
        dd($user_id);
        Post::create($request->all());
        $post_id = Post::select('id')->latest()->first();
        if(request()->hasfile('post_image'))
        {
            $file_name= time() . '_' .request()->file('post_image')->getClientOriginalName();
            try{
                request()->file('post_image')->move(public_path().'/uploads/postImages/', $file_name);
                Post::where('id',$post_id->id)->update([
                    'post_image' => $file_name
                ]);
            }catch(Exception $e){
                /* report($e) */
                return redirect('/user')->with('post_create','file upload failed');
            }
        }
        return redirect('/user')->with('post_create','successfully');
    }

}
