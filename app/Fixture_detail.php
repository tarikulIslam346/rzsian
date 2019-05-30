<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture_detail extends Model
{
    protected $fillable =[
        'fixture_id','team_id','score','win_status'
    ];
}
