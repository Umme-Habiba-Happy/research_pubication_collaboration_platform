<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
