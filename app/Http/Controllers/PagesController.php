<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
    	return view('home.index');
    }
    public function batch_info(){
    	if(\Auth::check())
    	return view('user.index');
    	else return view('home.index');
    } 
}
