<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Researcher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ResearcherController extends Controller
{
    public function researcherPrint(){
        $researchers= User::where('role' , 'researcher')->get();
        return view ('Admin.pages.researcher.print', compact('researchers'));
        }
    public function researcher(){
        $researchers= User::where('role' , 'researcher')->paginate(5);
       return view ('Admin.pages.researcher.list', compact('researchers'));
    }

    public function researcherDelete($id){



    $user = User::find($id);

    if ($user) {
        // Perform any additional checks or permissions if needed
        $user->delete();

        // Redirect back or to a specific route after deletion
        return redirect()->route('researcher.list')->with('success', 'User deleted successfully');
    } else {
        // Handle the case where the post is not found
        return redirect()->route('researcher.list')->with('error', 'User not found');
    }
}
    
    public function researcherForm(){
        return view ('Admin.pages.researcher.form');

    }

    public function store(Request $request){

    


        $validate = Validator::make($request->all(),[
            'name' =>'required',
            'email' => 'required',
            'role' => 'required',

            'degree' => 'required',
            'institute' => 'required',
            'department' => 'required',
            'skills' => 'required',


        ]);
        if($validate-> fails())
        {
            return redirect()-> back()->withErrors($validate);
        }
        $fileName = null;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
 
        }
        User::create(
            [            
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'researcher',
            'degree' =>'BCSE',
            'institution' =>'iubat',
            'department' =>'CSE',
            'skills' =>'data science',
            'image' => $fileName

           

            ]
      );
            return redirect() -> route('researcher.list');

    }

    public function edit($id){
        $researcher = User::find($id);
        //dd($researchers);
        return view('admin.pages.researcher.editForm',compact('researcher'));
        return redirect()->back();

    }

    
    public function update(Request $request, $id){
        //dd($request->all());
        $researchers = User::find($id);
 
        if($researchers){

         $fileName = $researchers->image;
         if($request->hasFile('image')){
             $file = $request->file('image');
             $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
             $file->storeAs('/uploads', $fileName);
  
  
         }
        $researchers->update([
             
  
             'name'=>$request->name,
             'email'=>$request ->email,
             'degree'=>$request->degree,
             'department'=>$request->department,
             'institution' => $request ->institution,
             'skills' => $request ->skills
  
             ]);
 
 
        }
                    //dd($researchers);

        return redirect() -> route('researcher.list');

        
     }
 
 




}
