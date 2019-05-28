<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionController extends Controller
{      
    public function store(){
      	if (auth()->attempt(request(['phone','password'])) && request('status') == 0){
          //$id = auth()->id();
        	return redirect('/user'); 
      	}
      	if (auth()->attempt(request(['phone','password'])) && request('status') == 1){
              $is_admin = User::where('phone',request('phone'))->where('type','=',1)->first();
              if($is_admin)return redirect('/admin'); 
              else return redirect('/user');
      	}
      	return back();
      	  
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/admin_login');
    }
    public function destroy_user()
    {
        auth()->logout();
        return redirect('/');
    }
}
