<?php

namespace App\Http\Controllers;

use App\Fixture;
use App\Fixture_detail;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function FixtureCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_id'   => 'required',
            'match_date'   => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $fixture = new Fixture();
        $fixture->store();
        $fixtureId = Fixture::latest()->first();
        $team_ids = request('team_id');
        if(count($team_ids)>0){
            /*$prev_permissions = UserRole::select('*')->where('type_id',$userTypeId)->get();
            if($prev_permissions){
                UserRole::where('type_id',$userTypeId)->delete();
            }*/
            for($i = 0 ; $i<count($team_ids) ; $i++){
                $fixture_details = new Fixture_detail();
                $fixture_details->fixtureId =  $fixtureId->fixture_id;
                $fixture_details->team_id =  $team_ids[$i];
                $fixture_details->win_status =  0;
                $fixture_details->save();
            }
        }
        
        return response()->json(['success'=>true , 'message' => 'successfully created']);

    }

    public function FixtureEdit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fixture_id'      => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $match_date = request('match_date');
        $match_time = request('match_time');

        $update_array = array();
        if (!is_null($match_date)) {
            $update_array['match_date'] = $match_date;
        }
        if (!is_null($match_time)) {
            $update_array['match_time'] = $match_time;
        }
        $team_ids = request('team_id');
        if(count($team_ids)>0){
            $update_array['team1'] = $team_ids[0];
            $update_array['team2'] = $team_ids[1];
        }
        $fixture = new Fixture();
        $fixture->edit($update_array);
        $fixtureId = request('player_id');
        
        if(count($team_ids)>0){
            $prev_teams = Fixture_detail::select('*')->where('fixture_id',$fixtureId)->get();
            if($prev_teams){
                Fixture_detail::where('fixture_id',$fixtureId)->delete();
            }
            for($i = 0 ; $i<count($team_ids) ; $i++){
                $fixture_details = new Fixture_detail();
                $fixture_details->fixtureId =  $fixtureId;
                $fixture_details->team_id =  $team_ids[$i];
                $fixture_details->save();
            }
        }
        return response()->json(['success'=>true , 'message' => 'Updated successfully']);
    }

    public function resultUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_id'   => 'required',
            'fixture_id'   => 'required',
            'score'   => 'required',
            'winner'   => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $winner = request('winner');
        $man_of_the_match = request('man_of_the_match');

        $update_array = array();
        if (!is_null($winner)) {
            $update_array['winner'] = $winner;
        }
        if (!is_null($man_of_the_match)) {
            $update_array['man_of_the_match'] = $man_of_the_match;
        }
        $update_array['match_status'] = 1;
        $fixture = new Fixture();
        $fixture->edit($update_array);

        $team_ids = request('team_id');
        $scores = request('score');
        if(count($team_ids)>0){
            for($i = 0 ; $i<count($team_ids) ; $i++){
                if($winner != 2){
                    if($team_ids[$i] == $winner){
                        $win_status = 1;
                    }else{
                        $win_status = 0;
                    }
                } else{
                    $win_status = 2;
                }
                Fixture_detail::where('team_id', $team_ids[$i])->update([
                        'score' => $scores[$i],
                        'win_status' => $win_status
                ]);
            }
        }

        return response()->json(['success'=>true , 'message' => 'successfully created']);

    }

    public function getFixtureInfo($fixture_id){
        $Fixture_info = Fixture::select('fixtures.*','t1.team_name as team1','t2.team_name as team2','fd1.score as team1_score','fd2.score as team2_score')
                        ->join('teams as t1','t1.team_id','=','fixtures.team1')
                        ->join('teams as t2','t2.team_id','=','fixtures.team2')
                        ->join('fixture_details as fd1','fd1.team_id','=','fixtures.team1')
                        ->join('fixture_details as fd2','fd2.team_id','=','fixtures.team2')
                        ->where('fixture_id',$fixture_id)->get();
        return response()->json($Fixture_info);
    }

    public function getFixtures(){
        $fixtures = Fixture::select('fixtures.*','t1.team_name as team1','t2.team_name as team2','fd1.score as team1_score','fd2.score as team2_score')
            ->join('teams as t1','t1.team_id','=','fixtures.team1')
            ->join('teams as t2','t2.team_id','=','fixtures.team2')
            ->join('fixture_details as fd1','fd1.team_id','=','fixtures.team1')
            ->join('fixture_details as fd2','fd2.team_id','=','fixtures.team2')
            ->get();
        return response()->json($fixtures);
    }

}
