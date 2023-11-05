<?php

namespace App\Http\Controllers;

use App\Models\Researcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ResearcherController extends Controller
{
    public function researcher(){
        $researchers=Researcher::paginate(3);
       return view ('Admin.pages.researcher.list', compact('researchers'));
    }
    public function researcherForm(){
        return view ('Admin.pages.researcher.form');

    }

    public function store(Request $request){

        $validate = Validator::make($request->all(),[
            'researcher_name' =>'required',
            'researcher_field' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'affiliation' => 'required',
            'research_interest' => 'required'

        ]);
        if($validate-> fails())
        {
            return redirect()-> back()->withErrors($validate);
        }
        Researcher::create(
            [
                'researcher_name' => $request ->researcher_name,
                'researcher_field' => $request ->researcher_field,
                'email' => $request ->email,
                'contact' => $request ->contact,
                'affiliation' => $request ->affiliation,
                'research_interest' => $request ->research_interest

            ]
            );
            return redirect() -> route('researcher.list');

    }




}
