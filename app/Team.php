<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable =[
        'team_name','manager_id','batch','team_year','coach_id','logo'
    ];

    public  function store(){
        Team::create([
            'team_name' => request('team_name'),
            'manager_id'=>request('manager_id'),
            'batch'=>request('batch'),
            'team_year'=>request('team_year'),
            'coach_id'=>request('coach_id')
        ]);
    }

    public  function edit($update_array){
        Team::where('team_id', request('team_id'))->update($update_array);
    }
}
