<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

    public function redirectToFacebookProvider()
    {
        return Socialite::driver('facebook')->scopes([
            "publish_actions, manage_pages", "publish_pages"])->redirect();
    }
 
    public function handleProviderFacebookCallback()
    {
        $auth_user = Socialite::driver('facebook')->user();
 
        $user = User::updateOrCreate(
            [
                'email' => $auth_user->email
            ],
            [
                'token' => $auth_user->token,
                'name'  =>  $auth_user->name
            ]
        );
 
        Auth::login($user, true);
        return redirect()->to('/'); // Redirect to a secure page
    }
}
