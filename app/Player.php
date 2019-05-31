<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable =[
        'player_name','age','dob','team_id','total_run','total_wicket','total_match','player_image','position',
    ];

    public  function store(){
        Player::create([
            'player_name' => request('player_name'),
            'age'=>request('age'),
            'dob'=>request('dob'),
            'team_id'=>request('team_id'),
            'position'=>request('position'),
            'total_run'=>request('total_run'),
            'total_wicket'=>request('total_wicket'),
            'total_match'=>request('total_match'),
            'player_image'=>request('player_image')
            
        ]);
    }

    public  function edit($update_array){
        Player::where('player_id', request('player_id'))->update($update_array);
    }
}
