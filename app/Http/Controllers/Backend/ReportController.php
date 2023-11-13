<?php

namespace App\Http\Controllers\Backend;
use App\Models\Report;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function report(){
        $reports=Report::all();

        return view ('Admin.pages.report.list',compact('reports'));
    }

    public function reportForm(){
        return view ('Admin.pages.report.form');
    }
    public function store(Request $request){

        Report::create([
            'Publications'=>$request -> no_publications,
            'Downloads'=>$request -> no_downloads,
            'Citations'=>$request -> no_citations,
            'Views'=> $request ->no_views

        ]);
        return redirect()->route('report.list');

    }
}
