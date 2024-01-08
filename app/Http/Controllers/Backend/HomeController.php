<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    public function home(){
        $researcher = User::where('role', 'researcher')->count();
        $uploads = Post::all()->count();
        $categories = Category::all()->count();

        $publications = Post::where('status','Approved')->count();
        return view ('Admin.pages.home.home',compact('researcher','publications','uploads','categories'));
    }
    // public function form(){
    //     return view('Admin.pages.home.form');
    // }
    // public function store(Request $request){
    //     dd($request -> all());
    // }

   
}
