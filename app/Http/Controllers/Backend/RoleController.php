<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    //
    public function role(){
        return view("Admin.pages.role.list");

    }
    public function form(){
        return view("Admin.pages.role.form");

    }
}
