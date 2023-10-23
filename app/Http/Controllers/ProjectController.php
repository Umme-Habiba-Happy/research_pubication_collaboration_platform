<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project(){
        return view ('Admin.pages.project.list');
    }
    public function projectForm(){
        return view ('Admin.pages.project.form');
    }
    public function store(){
        
    }
}
