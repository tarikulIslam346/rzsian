<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manager;
use App\Coach;
use App\Team;
use App\Player;

class AdminController extends Controller
{
    public function __construct(){
    	$this->middleware('auth')->except(['create']);
    }
    public function index(){
        $mangers = Manager::all();
        $coaches = Coach::all();
        $teams = Team::all();
        $players = Player::all();
    	return view('admin.index',compact('mangers','coaches','teams','players'));
    }
    public function create(){
    	return view('admin.login');
    }

}
