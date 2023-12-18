<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Researcher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ResearcherController extends Controller
{
    public function researcher(){
        $researchers= User::where('role' , 'researcher')->get();
       return view ('Admin.pages.researcher.list', compact('researchers'));
    }
    public function researcherForm(){
        return view ('Admin.pages.researcher.form');

    }

    public function store(Request $request){

        $validate = Validator::make($request->all(),[
            'researcher_name' =>'required',
            'researcher_field' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'affiliation' => 'required',
            'research_interest' => 'required'

        ]);
        if($validate-> fails())
        {
            return redirect()-> back()->withErrors($validate);
        }
        Researcher::create(
            [
                'researcher_name' => $request ->researcher_name,
                'researcher_field' => $request ->researcher_field,
                'email' => $request ->email,
                'contact' => $request ->contact,
                'affiliation' => $request ->affiliation,
                'research_interest' => $request ->research_interest

            ]
            );
            return redirect() -> route('researcher.list');

    }

    public function edit($id){
        $researchers = Researcher::find($id);
        // dd($researchers);
        return view('admin.pages.researcher.editForm',compact('researchers'));

    }

    
    public function update(Request $request, $id){
        dd($request->all());
        $researchers = Researcher::find($id);
 
        if($researchers){
         $fileName = $researchers->image;
         if($request->hasFile('image')){
             $file = $request->file('image');
             $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
             $file->storeAs('/uploads', $fileName);
  
  
         }
        $researchers->update([
             
  
             'researcher_name'=>$request->researcher_name,
             'researcher_field'=>$request->researcher_field,
             'email'=>$request ->email,
             'contact'=>$request->contact,
             'affiliation' => $request ->affiliation,
             'research_interest' => $request ->research_interest
  
             ]);
 
         return redirect() -> route('researcher.list');
 
        }
        
     }
 
 




}
