<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearcherController extends Controller
{
    public function researcher(){
        return view ('Admin.pages.researcher.list');
    }
}
