<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Response;


class RegistrationController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        if ($validator->passes()) {
            User::create([
                'name'  => request('name') , 
                'email' => request('name'),
                'password' => bcrypt(request('password'))
                ]);

            // Store your user in database 
    
           return response()->json(['responseText' => 'Success!'], 200);
    
        }
      

        //return;
    }
}
