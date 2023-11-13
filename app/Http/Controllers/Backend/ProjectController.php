<?php

namespace App\Http\Controllers\Backend;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{

    public function project(){
        $projects=Project::paginate(3);
        return view ('Admin.pages.project.list',compact('projects'));
    }
    public function projectForm(){
        return view ('Admin.pages.project.form');
    }
    public function store(Request $request){

        $validate = Validator::make($request->all(),[
            'name' =>'required',
            'description' =>'required',
            'start_date' =>'required',
            'end_date' =>'required',
            'budget' => 'required'
        ]);
        if($validate->fails()){
         return redirect()->back()->withErrors($validate);
        }
       Project::create (
        [
            'name' => $request -> project_name,
            'description' => $request -> project_description,
            'start_date' => $request -> start_date,
            'end_date' => $request -> end_date,
            'budget' => $request -> budget


        ]
        
        );
        return redirect() -> route('project.list');

    }
}
