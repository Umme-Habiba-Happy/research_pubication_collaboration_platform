<?php

namespace App\Http\Controllers\Backend;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{

    public function project(){
        $projects=Post::with('category')->paginate(3);
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
                'author_name' =>'required',
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
            'author_name' => $request -> author_name,
            'category_id' => $request -> category_id,
            'file' => $request -> file,
        ]
        
        );
        return redirect() -> route('project.list');

    }

    public function viewPost(){
        return view ('Admin.pages.project.viewPost');
    }
}
