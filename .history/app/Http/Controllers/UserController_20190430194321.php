<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    //
    public function update($user_id){
        $name = request('name');
        $email = request('email');
        $password = request('password');
        $update_array = array();
        if (!is_null($name)) {
            $update_array['name'] = $name;
        }
        if (!is_null($password)) {
            $current_password = request('password');
            if (auth()->attempt(request(['password']))){
                $new_password = request('new_password');
                $retype_password = request('retype_password');
                if($new_password == $retype_password  )$update_array['password'] = bcrypt($new_password);
                else  return redirect('/user')->with('user_update','password not match');
            }else{
                return redirect('/user')->with('user_update','password not match');
            }

        }
        if (!is_null($email)) {
            $update_array['email'] = $email;
        }
        User::where('id',$user_id)
     	        ->update($update_array);
      return redirect('/user')->with('user_update','successfully');
    }
    public function getBatchdata($batch){
     $user = User::where('batch',$batch)->get();
     $batch = User::select('batch')->distinct('batch')->get();
     /* view('user.index',compact('user')); */
     return view('user.index',compact('user','batch') );
    }


}
