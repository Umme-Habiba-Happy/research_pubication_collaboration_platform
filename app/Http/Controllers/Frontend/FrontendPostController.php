<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendPostController extends Controller
{
    //
    
    public function mypostList(){
     
        $projects=Post::where('researcher_id', '=' , auth()->user()->id)->get();

        // dd($projects);

        return view('frontend.pages.user.postList', compact('projects'));
    }

    public function mypostView($id){
        $project = Post::find($id);

    return view('frontend.pages.user.postView',compact('project'));
    }
    public function postForm(){
        $categories=Category::all();

        return view('frontend.pages.user.postForm', compact('categories'));
        return redirect()->route('researcher.post');

    }
    public function resubmit(){
        $categories=Category::all();
        return view('frontend.pages.user.resubmitForm',compact('categories'));
        return redirect()->route('researcher.post');

    }
    public function postStore(Request $request){

        // dd($request->all());
        $fileName = null;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
        }
        //dd($fileName);

        //dd($request);

        Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'author_name'=>$request->author_name,
            'coauthor_name'=>$request->coauthor_name,
            'doi'=>$request->doi,
            'researcher_id'=>auth()->user()->id,
            'category_id'=>$request ->category_id,
            'file'=>$fileName
            ]);

        
            return redirect()->route('researcher.post');
    }
}
