<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    protected $fillable =[
        'match_date','match_time','match_status','winner','man_of_the_match'
    ];

    public  function store(){
        $team_ids = request('team_id');
        Fixture::create([
            'match_date' => request('player_name'),
            'match_time'=>request('age'),
            'team1'=>$team_ids[0],
            'team2'=>$team_ids[1],
            'match_status'=>0,
        ]);
    }

    public  function edit($update_array){
        Fixture::where('fixture_id', request('fixture_id'))->update($update_array);
    }
}
