<?php

namespace App\Http\Controllers;

use App\Fixture;
use App\Fixture_detail;
use App\Team;
use App\Team_image;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function TeamCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_name'   => 'required',
            'manager_id'  => 'required',
            'coach_id'    => 'required',
            'batch'       => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $team = new Team();
        $team->store();
        $teamId = Team::latest()->first();
        if(request()->hasfile('file'))
        {
            $file_name= time() .'_'.request()->file('file')->getClientOriginalName();
            try{
                request()->file('file')->move(public_path().'/uploads/teams/', $file_name);
                Team::where('team_id',$teamId->team_id)->update([
                    'logo' => $file_name
                ]);
            }catch(Exception $e){
                report($e) ;
                return response()->json(['success'=>false , 'message' => 'file not uploaded'],422);
            }

        }

        if(request()->hasfile('images'))
        {
            foreach($request->file('images') as $image)
            {
                $name= time() .'_'.$image->getClientOriginalName();
                try{
                    $image->move(public_path().'/uploads/teams/', $name);
                    Team_image::create([
                        'team_id' => $teamId->team_id,
                        'image'=>$name
                    ]);
                }catch(Exception $e){
                    report($e) ;
                    return response()->json(['success'=>false , 'message' => 'file not uploaded'],422);
                }
            }

        }
        return response()->json(['success'=>true , 'message' => 'successfully created']);

    }

    public function TeamEdit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_id'      => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $team_name = request('player_name');
        $manager_id = request('manager_id');
        $batch = request('batch');
        $team_year = request('team_year');
        $coach_id = request('coach_id');

        $update_array = array();
        if (!is_null($team_name)) {
            $update_array['team_name'] = $team_name;
        }
        if (!is_null($manager_id)) {
            $update_array['manager_id'] = $manager_id;
        }
        if (!is_null($batch)) {
            $update_array['batch'] = $batch;
        }
        if (!is_null($team_year)) {
            $update_array['team_year'] = $team_year;
        }
        if (!is_null($coach_id)) {
            $update_array['coach_id'] = $coach_id;
        }
        
        $team = new Team();
        $team->edit($update_array);
        $teamId = request('team_id');
        if(request()->hasfile('file'))
        {
            $file_name= time() .'_'.request()->file('file')->getClientOriginalName();
            try{
                request()->file('file')->move(public_path().'/uploads/teams/', $file_name);
                Team::where('team_id',$teamId)->update([
                    'logo' => $file_name
                ]);
            }catch(Exception $e){
                return response()->json(['success'=>false , 'message' => 'file not uploaded'],422);
            }

        }

        if(request()->hasfile('images'))
        {
            $prev_images = Team_image::select('*')->where('team_id',$teamId)->get();
            if($prev_images){
                Team_image::where('team_id',$teamId)->delete();
            }
            foreach($request->file('images') as $image)
            {
                $name= time() .'_'.$image->getClientOriginalName();
                try{
                    $image->move(public_path().'/uploads/teams/', $name);
                    Team_image::create([
                        'team_id' => $teamId->team_id,
                        'image'=>$name
                    ]);
                }catch(Exception $e){
                    report($e) ;
                    return response()->json(['success'=>false , 'message' => 'file not uploaded'],422);
                }
            }

        }
        return response()->json(['success'=>true , 'message' => 'Updated successfully']);
    }

    public function getTeamInfo($team_id){
        $team_info = Team::select('teams.*','coaches.coach_name as coach_name','managers.manager_name as manager_name')
                    ->join('coaches','coaches.coach_id','=','teams.coach_id')
                    ->join('managers','managers.manager_id','=','teams.manager_id')
                    ->where('team_id',$team_id)->get();
        return response()->json($team_info);
    }

    public function getTeams(){
        $teams = Team::select('*')->orderBy('team_id', 'desc')->get();
        return response()->json($teams);
    }

    public function getTeamDetails($team_id){
        $team_info = Team::select('teams.*','coaches.coach_name as coach_name','managers.manager_name as manager_name')
            ->join('coaches','coaches.coach_id','=','teams.coach_id')
            ->join('managers','managers.manager_id','=','teams.manager_id')
            ->where('team_id',$team_id)->get();

        $team_fixtures = Fixture::select('fixtures.*','t1.team_name as team1','t2.team_name as team2','fd1.score as team1_score','fd2.score as team2_score')
            ->join('teams as t1','t1.team_id','=','fixtures.team1')
            ->join('teams as t2','t2.team_id','=','fixtures.team2')
            ->join('fixture_details as fd1','fd1.team_id','=','fixtures.team1')
            ->join('fixture_details as fd2','fd2.team_id','=','fixtures.team2')
            ->where('fixtures.team1',$team_id)
            ->orWhere('fixtures.team2',$team_id)
            ->get();

        $team_point_info = Fixture_detail::select('fixture_details.*',
                           DB::raw("(SELECT count(fixture_details.fix_detail_id) FROM fixture_details WHERE fixture_details.win_status = 1) as total_win"),
                           DB::raw("(SELECT count(fixture_details.fix_detail_id) FROM fixture_details WHERE fixture_details.win_status = 0) as total_lose"),
                           DB::raw("(SELECT count(fixture_details.fix_detail_id) FROM fixture_details WHERE fixture_details.win_status = 2) as total_draw"))
                           ->where('fixture_details.team_id',$team_id)
                           ->get();

        return response()->json(compact('team_info','team_fixtures','team_point_info'));
    }

    public function getPointTable(){
        $point_table = Fixture_detail::select('fixture_details.*',
            DB::raw("(SELECT count(fixture_details.fix_detail_id) FROM fixture_details WHERE fixture_details.win_status = 1 GROUP BY fixture_details.team_id) as total_win"),
            DB::raw("(SELECT count(fixture_details.fix_detail_id) FROM fixture_details WHERE fixture_details.win_status = 0 GROUP BY fixture_details.team_id) as total_lose"),
            DB::raw("(SELECT count(fixture_details.fix_detail_id) FROM fixture_details WHERE fixture_details.win_status = 2 GROUP BY fixture_details.team_id) as total_draw"))
            ->get();

        return response()->json(compact('point_table'));
    }

}
