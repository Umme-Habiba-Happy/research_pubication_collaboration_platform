<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function projectPrint(){
        $projects=Post::with('category','user')->paginate(10);
        return view ('Admin.pages.project.print',compact('projects'));

    }
    public function project(){

        $projects=Post::with('category','user')->paginate(10);
        return view ('Admin.pages.project.list',compact('projects'));
    }
    public function projectForm(){

        $categories=Category::all();

        return view ('Admin.pages.project.form', compact('categories'));
    }
    public function store(Request $request){

        //dd($request->all());
            $validate = Validator::make($request->all(),[
                'title' =>'required',
                'description' =>'required',
                'researcher_id' =>'required',
                'category_id' =>'required',
                'file' => 'required'
            ]);
            if($validate->fails()){
            // notify()->error("validation failed!");
            return redirect()->back()->withErrors($validate);
            }

        // dd($request->all());
       Post::create (
        [
            'title' => $request -> title,


            'description' => $request -> description,
            'researcher_id' =>auth()->user()->id,
            'category_id' => $request -> category_id,
            'file' => $request -> file,
        ]
        
        );
        return redirect() -> route('project.list');

    }

    public function viewPost($id){
        $project = Post::find($id);
       // dd($project);
        return view ('Admin.pages.project.viewPost',compact('project'));
    }
    public function postApprove(Request $request, $id){
            $project = Post::find($id);
            //dd($project);
            $project->update([
                'status'=>'Approved',
                'created_at' =>$request->created_at
            ]);
            return redirect()->route('project.list');

    }

    public function postReject(Request $request, $id){
        $project = Post::find($id);
        // dd($project);
        $project->update([
            'status'=>'Rejected',
        ]);
        return redirect()->route('project.list');

}

public function comment(Request $request, $id){
    $project = Post::find($id);
     //dd($request->all());
    $project->update([
        'comment'=>$request->comment,
    ]);
    return redirect()->back();

}


}
