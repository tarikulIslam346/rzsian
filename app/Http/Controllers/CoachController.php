<?php

namespace App\Http\Controllers;

use App\Coach;
use Illuminate\Http\Request;


class CoachController extends Controller
{
    public function CoachCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coach_name'   => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $coach = new Coach();
        $coach->store();
        $coachId = Coach::latest()->first();
        if(request()->hasfile('file'))
        {
            $file_name= time() .'_'.request()->file('file')->getClientOriginalName();
            try{
                request()->file('file')->move(public_path().'/uploads/coaches/', $file_name);
                Coach::where('coach_id',$coachId->coach_id)->update([
                    'coach_image' => $file_name
                ]);
            }catch(Exception $e){
                report($e) ;
                return response()->json(['success'=>false , 'message' => 'file not uploaded'],422);
            }

        }
        return response()->json(['success'=>true , 'message' => 'successfully created']);

    }

    public function CoachEdit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coach_id'      => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $coach_name = request('coach_name');
        $age = request('age');
        $dob = request('dob');

        $update_array = array();
        if (!is_null($coach_name)) {
            $update_array['coach_name'] = $coach_name;
        }
        if (!is_null($age)) {
            $update_array['age'] = $age;
        }
        if (!is_null($dob)) {
            $update_array['dob'] = $dob;
        }
        
        $coach = new Coach();
        $coach->edit($update_array);
        $coachId = request('coach_id');
        if(request()->hasfile('file'))
        {
            $file_name= time() .'_'.request()->file('file')->getClientOriginalName();
            try{
                request()->file('file')->move(public_path().'/uploads/coaches/', $file_name);
                Coach::where('coach_id',$coachId)->update([
                    'coach_image' => $file_name
                ]);
            }catch(Exception $e){
                return response()->json(['success'=>false , 'message' => 'file not uploaded'],422);
            }

        }
        return response()->json(['success'=>true , 'message' => 'Updated successfully']);
    }

    public function getCoachInfo($coach_id){
        $coach_info = Coach::select('coaches.*','teams.team_name')
            ->join('teams','teams.coach_id','=','coach.coach_id')
            ->where('coach_id',$coach_id)->get();
        
        return response()->json($coach_info);
    }

    public function getCoaches(){
        $coaches = Coach::select('coaches.*','teams.team_name')
            ->join('teams','teams.coach_id','=','coach.coach_id')
            ->orderBy('coaches.coach_id', 'desc')->get();
        return response()->json($coaches);
    }

}
