<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable =[
        'player_name','age','dob','team_id','total_run','total_wicket','player_image'
    ];

    public  function store(){
        Player::create([
            'player_name' => request('player_name'),
            'age'=>request('age'),
            'dob'=>request('dob'),
            'team_id'=>request('team_id'),
            'total_run'=>request('total_run'),
            'total_wicket'=>request('total_wicket'),
            'payer_image'=>request('payer_image')
        ]);
    }

    public  function edit($update_array){
        Player::where('player_id', request('player_id'))->update($update_array);
    }
}
