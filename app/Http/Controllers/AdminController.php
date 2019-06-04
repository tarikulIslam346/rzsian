<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manager;
use App\Coach;
use App\Team;
use App\Player;
use App\Fixture;
use App\Fixture_detail;

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
        $fixtures = Fixture::getFixtures();
    	return view('admin.index',compact('mangers','coaches','teams','players','fixtures'));
    }
    public function create(){
    	return view('admin.login');
    }

}
