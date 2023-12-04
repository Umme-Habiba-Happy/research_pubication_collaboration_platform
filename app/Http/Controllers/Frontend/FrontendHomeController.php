<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Researcher;

class FrontendHomeController extends Controller
{
    public function home(){
      //$category = category::all();
      return view('frontend.pages.home.home');

    }
    public function slider(){
      return view('frontend.pages.home.slider');
    }
    public function search(Request $request){
      if($request->search){
          $researchers = Researcher::where('researchers', 'LIKE', '%'. $request->search.'%')->get();
      }
      else
      {
        $researchers = Researcher::all();
      }
      return view('frontend.pages.home.search', compact('researchers'));
    }
}
