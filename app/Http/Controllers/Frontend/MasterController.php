<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;

class MasterController extends Controller
{
    //
    public function master(){
        $category = category::all();
        return view('frontend.master');
    }
}
