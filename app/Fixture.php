<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    protected $fillable =[
        'match_date','match_time','match_status','winner','man_of_the_match','team1','team2',
    ];

    public  function store(){
        $team_ids = request('team_id');
       // dd($team_ids[0]);
        Fixture::create([
            'match_date' => request('match_date'),
            'match_time'=>request('match_time'),
            'team1'=>$team_ids[0],
            'team2'=>$team_ids[1],
            'match_status'=>0,
        ]);
    }

    public  function edit($update_array){
        Fixture::where('fixture_id', request('fixture_id'))->update($update_array);
    }

    
    public static function getFixtures(){
        $fixtures = Fixture::select('fixtures.*','t1.team_name as team1','t2.team_name as team2','fd1.score as team1_score','fd2.score as team2_score')
            ->join('teams as t1','t1.team_id','=','fixtures.team1')
            ->join('teams as t2','t2.team_id','=','fixtures.team2')
            ->join('fixture_details as fd1','fd1.team_id','=','fixtures.team1')
            ->join('fixture_details as fd2','fd2.team_id','=','fixtures.team2')
            ->distinct('fixture_details.fixture_id ')
            ->get();
        return $fixtures;
    }
}
