<?php

namespace App\Http\Controllers;
use App\Models\Sponsor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SponsorController extends Controller
{
    public function sponsor(){
        $sponsors = Sponsor::paginate(3);
        return view ('Admin.pages.sponsor.list',compact('sponsors'));
    }

    public function sponsorForm(){
        return view ('Admin.pages.sponsor.form');
    }
    public function store(Request $request){
        $validate = Validator::make($request->all(),[
            'sponsorName' =>'requiered',
            'sponsorType' =>'requiered',
            'sponsorURL' => 'requiered'
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }
        Sponsor::create([

            'sponsorName' => $request -> sponsor_name,
            'sponsorType' => $request -> sponsor_type,
            'sponsorURL' => $request -> sponsor_url





        ]);
        return redirect()-> route('sponsor.list');
    }
}
