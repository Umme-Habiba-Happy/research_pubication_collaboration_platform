<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function loginForm(){
        return view('Admin.pages.login');
    }

    public function loginStore(Request $request){
        //dd($request->all());
        //validate
       

        //migration table

        $credentials =$request->except('_token');
        
        $login =auth()->attempt($credentials);
        if($login){
            return redirect()->route('dashboard');
        }
            return redirect()->back()->withErrors("invalid ");
    }

    public function logout(){

        auth()->logout();
        return redirect()->route('admin.login');
    
    }
    public function list(){
        
        $users = User::all();
        return view("Admin.pages.users.list",compact('users'));
    }
    public function form(){
             return view('Admin.pages.users.form');
    }

    public function store(Request $request){
        
        $fileName = null;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);


        }
        User::create(
            [
            

            'name'=>$request->user_name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password) ,
            'image'=>$fileName

            ]
      );
      return redirect() -> route('users.list');
    }


}
