<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;


class ManagerController extends Controller
{
    public function ManagerCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'manager_name'   => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $manager = new Manager();
        $manager->store();
        $managerId = Manager::latest()->first();
        if(request()->hasfile('file'))
        {
            $file_name= time() .'_'.request()->file('file')->getClientOriginalName();
            try{
                request()->file('file')->move(public_path().'/uploads/managers/', $file_name);
                Manager::where('manager_id',$managerId->manager_id)->update([
                    'manager_image' => $file_name
                ]);
            }catch(Exception $e){
                report($e) ;
                return response()->json(['success'=>false , 'message' => 'file not uploaded'],422);
            }

        }
        return response()->json(['success'=>true , 'message' => 'successfully created']);

    }

    public function ManagerEdit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'manager_id'      => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $manager_name = request('manager_name');
        $age = request('age');
        $dob = request('dob');

        $update_array = array();
        if (!is_null($manager_name)) {
            $update_array['manager_name'] = $manager_name;
        }
        if (!is_null($age)) {
            $update_array['age'] = $age;
        }
        if (!is_null($dob)) {
            $update_array['dob'] = $dob;
        }
        
        $manager = new Manager();
        $manager->edit($update_array);
        $managerId = request('manager_id');
        if(request()->hasfile('file'))
        {
            $file_name= time() .'_'.request()->file('file')->getClientOriginalName();
            try{
                request()->file('file')->move(public_path().'/uploads/managers/', $file_name);
                Manager::where('manager_id',$managerId)->update([
                    'manager_image' => $file_name
                ]);
            }catch(Exception $e){
                return response()->json(['success'=>false , 'message' => 'file not uploaded'],422);
            }

        }
        return response()->json(['success'=>true , 'message' => 'Updated successfully']);
    }

    public function getManagerInfo($manager_id){
        $manager_info = Manager::select('managers.*','teams.team_name')
            ->join('teams','teams.manager_id','=','managers.manager_id')
            ->where('manager_id',$manager_id)->get();
        return response()->json($manager_info);
    }

    public function getManagers(){
        $managers = Manager::select('managers.*','teams.team_name')
            ->join('teams','teams.manager_id','=','managers.manager_id')
            ->orderBy('managers.manager_id', 'desc')->get();
        return response()->json($managers);
    }

}
