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
        if(request()->hasfile('file'))
        {
            $file_name= time() . '_' .request()->file('file')->getClientOriginalName();
            try{
                request()->file('file')->move(public_path().'/uploads/postImages/', $file_name);
                Archive::where('archive_id',$post_id->id)->update([
                    'file' => $file_name
                ]);
            }catch(Exception $e){
                /* report($e) */
                return redirect('/user')->with('post_create','file upload failed');
            }
        }
        return redirect('/user')->with('post_create','successfully');
    }

}
