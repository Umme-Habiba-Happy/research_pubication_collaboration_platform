<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaperController extends Controller
{
    public function paper(){
        $publications = Publication::paginate(3);

        return view ('Admin.pages.paper.list',compact('publications'));
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
