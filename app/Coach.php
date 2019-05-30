<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable =[
        'coach_name','age','dob','coach_image'
    ];

    public  function store(){
        Coach::create([
            'coach_name' => request('coach_name'),
            'age'=>request('age'),
            'dob'=>request('dob'),
        ]);
    }

    public  function edit($update_array){
        Coach::where('coach_id', request('coach_id'))->update($update_array);
    }
}
