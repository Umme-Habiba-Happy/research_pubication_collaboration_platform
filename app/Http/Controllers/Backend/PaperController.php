<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PaperController extends Controller
{

    public function paperPrint(){
        $projects = Post::where('status','Approved')->get();
       return view ('Admin.pages.paper.print',compact('projects'));
   }
    public function paper(){
         $projects = Post::where('status','Approved')->get();
        return view ('Admin.pages.paper.list',compact('projects'));
    }

    public function paperForm(){
        return view ('Admin.pages.paper.form');
    }

    public function store(Request $request){
        $validate =Validator::make($request->all(),[
            'paperName'=> 'requiered',
            'AuthorName' =>'requiered',
            'paperCategory' => 'requiered',
            'publicationDate' =>'requiered'

        ]);
        if($validate->fails())
        {
        return redirect()->back()->withErrors($validate);
        }
        Publication::create([

            'paperName'=> $request -> paper_name,
            'AuthorName' => $request -> author_name,
            'paperCategory' => $request -> paper_category,
            'publicationDate' => $request -> publication_date

        ]);
        return redirect() -> route('paper.store');
    }
}
