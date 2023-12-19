<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    //
    public function category(){
    //dd('hello home page');

    }
    public function research_under_category($id){
        $projects = Post::where('category_id', $id)->get();
        return view('frontend.pages.researches.research',compact('projects'));
        
    }
        
    }

      