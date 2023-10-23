<?php

namespace App\Http\Controllers;

use App\Models\Researcher;
use Illuminate\Http\Request;

class ResearcherController extends Controller
{
    public function researcher(){
        $researchers=Researcher::all();
       return view ('Admin.pages.researcher.list', compact('researchers'));
    }
    public function researcherForm(){
        return view ('Admin.pages.researcher.form');

    }

    public function store(Request $request){
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
            return redirect() -> back();

    }




}
