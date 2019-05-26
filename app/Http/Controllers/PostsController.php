<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public  function store(Request $request){
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

    public  function post_update(Request $request){
        $title = request('title');
        $post_id = request('post_id');
        $post = request('post');
        $update_array = array();
        if (!is_null($title)) {
            $update_array['title'] = $title;
        }
        if (!is_null($post)) {
            $update_array['post'] = $post;
        }
        
        if(request()->hasfile('post_image'))
        {
            $file_name= time() . '_' .request()->file('post_image')->getClientOriginalName();
            try{
                request()->file('post_image')->move(public_path().'/uploads/postImages/', $file_name);
                $update_array['post_image'] = $file_name;
            }catch(Exception $e){
                /* report($e) */
                return redirect('/user')->with('post_create','file upload failed');
            }
        }

        Post::where('id',$post_id)
     	        ->update($update_array);
        return redirect('/user')->with('post_update','successfully');
    }
    
    public  function delete_post($post){
        $post= Post::find($post);
        $post->delete();
        return redirect('/user')->with('post_delete','successfully');
    }

}
