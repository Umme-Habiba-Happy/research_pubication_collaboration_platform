<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function paper(){
        return view ('Admin.pages.paper.list');
    }
}
