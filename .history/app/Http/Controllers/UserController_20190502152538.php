<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    //
    public function update($user_id){
        $name = request('name');
        $phone = request('phone');
        $blood = request('blood');
        $password = request('password');
        $update_array = array();
        if (!is_null($name)) {
            $update_array['name'] = $name;
        }
        if (!is_null($phone)) {
            $update_array['phone'] = $phone;
        }
        if (!is_null($blood)) {
            $update_array['blood'] = $blood;
        }
        if (!is_null($password) && !is_null($name)) {
            $current_password = request('password');
            if (auth()->attempt(request(['name','password']))){
                $new_password = request('new_password');
                $retype_password = request('retype_password');
                if($new_password == $retype_password  )$update_array['password'] = bcrypt($new_password);
                else  return redirect('/user')->with('user_update','password not match');
            }else{
                return redirect('/user')->with('user_update','password not match');
            }

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
