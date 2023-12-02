<?php

namespace App\Http\Controllers\Frontend;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendHomeController extends Controller
{
    public function home(){
      //$category = category::all();
      return view('frontend.pages.home.home');

    }
    public function slider(){
      return view('frontend.pages.home.slider');
    }
}
