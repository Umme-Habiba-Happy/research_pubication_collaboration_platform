<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function sponsor(){
        return view ('Admin.pages.sponsor.list');
    }
}
