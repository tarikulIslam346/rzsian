<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Validator;

class PlayerController extends Controller
{
    public function PlayerCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'player_name'   => 'required',
            'team_id'        => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $player = new Player();
        $player->store();
        $playerId = Player::latest()->first();
        if(request()->hasfile('file'))
        {
            $file_name= time() .'_'.request()->file('file')->getClientOriginalName();
            try{
                request()->file('file')->move(public_path().'/uploads/players/', $file_name);
                Player::where('player_id',$playerId->player_id)->update([
                    'player_image' => $file_name
                ]);
            }catch(Exception $e){
                report($e) ;
                return response()->json(['success'=>false , 'message' => 'file not uploaded'],422);
            }

        }
        return redirect('/admin');

    }

    public function PlayerEdit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'player_id'      => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $player_name = request('player_name');
        $age = request('age');
        $position = request('position');
        $dob = request('dob');
        $team_id = request('team_id');
        $total_run = request('total_run');
        $total_wicket = request('total_wicket');
        $total_match = request('total_match');
        $update_array = array();
        if (!is_null($player_name)) {
            $update_array['player_name'] = $player_name;
        }
        if (!is_null($age)) {
            $update_array['age'] = $age;
        }
        if (!is_null($position)) {
            $update_array['position'] = $position;
        }
        if (!is_null($dob)) {
            $update_array['dob'] = $dob;
        }
        if (!is_null($team_id)) {
            $update_array['team_id'] = $team_id;
        }
        if (!is_null($total_run)) {
            $update_array['total_run'] = $total_run;
        }
        if (!is_null($total_wicket)) {
            $update_array['total_wicket'] = $total_wicket;
        }
        if (!is_null($total_match)) {
            $update_array['total_match'] = $total_match;
        }
        
        
        $player = new Player();
        $player->edit($update_array);
        $playerId = request('player_id');
        if(request()->hasfile('file'))
        {
            $file_name= time() .'_'.request()->file('file')->getClientOriginalName();
            try{
                request()->file('file')->move(public_path().'/uploads/players/', $file_name);
                Player::where('player_id',$playerId)->update([
                    'player_image' => $file_name
                ]);
            }catch(Exception $e){
                return response()->json(['success'=>false , 'message' => 'file not uploaded'],422);
            }

        }
        return redirect('/admin');
    }

    public function getPlayerInfo($player_id){
        $player_info = Player::select('players.*','teams.team_name')
                        ->join('teams','players.team_id','=','coach.team_id')
                        ->where('player_id',$player_id)->get();

        return response()->json($player_info);
    }

    public function getPlayers(){
        $players = Player::select('players.*','teams.team_name')
            ->join('teams','players.team_id','=','coach.team_id')
            ->orderBy('players.player_id', 'desc')->get();
        
        return response()->json($players);
    }

}
