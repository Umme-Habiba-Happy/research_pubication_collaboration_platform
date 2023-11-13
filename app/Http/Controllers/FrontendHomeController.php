<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function home(){
        //dd('hello home page');
        return view('frontend.master');
    }
}
