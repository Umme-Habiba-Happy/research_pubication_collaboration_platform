<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterController extends Controller
{
    //
    public function master(){
        $category = category::all();
        // dd('hi');
        $projects = Post::where("status", "=", "Approved")->get();
        // dd($projects);
        return view('frontend.pages.home.home', compact('projects'));
    }
}
