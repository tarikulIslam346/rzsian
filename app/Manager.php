<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable =[
        'manager_name','age','dob','manager_image'
    ];

    public  function store(){
        Manager::create([
            'manager_name' => request('manager_name'),
            'age'=>request('age'),
            'dob'=>request('dob'),
        ]);
    }

    public  function edit($update_array){
        Manager::where('manager_id', request('manager_id'))->update($update_array);
    }
}
