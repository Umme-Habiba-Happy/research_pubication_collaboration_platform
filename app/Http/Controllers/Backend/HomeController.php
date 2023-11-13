<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        return view ('Admin.pages.home.home');
    }
    public function form(){
        return view('Admin.pages.home.form');
    }
    public function store(Request $request){
        dd($request -> all());
    }

   
}
