<?php

namespace App\Http\Controllers\Backend;

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


}
