<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendResearchController extends Controller
{
    //
    public function research(){
        return view("frontend.pages.researches.research");
    }

    public function singleResearch(){

        return view("frontend.pages.researches.singleView");
    }

    public function secondResearch(){

        return view("frontend.pages.researches.secondResearch");
    }

    public function thirdResearch(){

        return view("frontend.pages.researches.thirdResearch");
    }

}
