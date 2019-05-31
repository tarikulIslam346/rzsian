<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function store(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required|confirmed|unique:users',
            'phone' => 'required|unique:users',
            'profile_pic' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $profile_pic ='';
        $image_name ='';
        if(request()->hasfile('profile_pic'))
         {
                $image_name =time()."-".request()->file('profile_pic')->getClientOriginalName();
               request()->file('profile_pic')->move(public_path().'/images/user_profile', $image_name);  
                $profile_pic = $image_name;  
            
         }
        User::create([
            'name'  => request('name') , 
            'email' => request('email'),
            'batch' => request('batch'),
            'phone' => request('phone'),
            'blood' => request('blood'),
            'status' => request('status'),
            'profile_pic' => $profile_pic,
            'password' => bcrypt(request('password')),
            'type' => 0,
        ]);
        if (auth()->attempt(request(['phone','password'])) && request('status') == 0){
            //$id = auth()->id();
              return redirect('/user')->with('registration','successfull'); 
            }
        // return redirect('/user')->with('registration','successfull');
    }      
}
