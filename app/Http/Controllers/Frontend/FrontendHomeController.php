<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Post;
use App\Models\Category;
use App\Models\Researcher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class FrontendHomeController extends Controller
{
    public function home(){
    //  $categories = category::all();
     $projects=Post::where('status', '=' , 'Approved')->get();
    //  dd($projects);

      return view('frontend.pages.home.home',compact('projects'));

    }
    public function slider(){
      return view('frontend.pages.home.slider');
    }
    public function search(Request $request){
      $projects=Post::where('status', '=' , 'Approved')->get();
      if($request->search){
          // dd($request->all());
          
          $projects = Post::where('title', 'LIKE', '%'. $request->search.'%')
          ->where('status', '=','Approved')
          ->get();
          // dd($projects);

      }
      else
      {
        $projects = Post::all();
      }

      // dd($request->search);
      return view('frontend.pages.home.search', compact('projects'));
    }
}
