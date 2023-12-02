<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendUserController extends Controller
{
    //
    public function profile(){
        return view('frontend.pages.user.profile');
    }

    public function registration(){

        //dd('login here');

        return view('frontend.pages.user.registration-form');
    }

    public function doRegistration(Request $request){
        //dd($request->all());
        User::create(
            [
            

            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'researcher',

            'password'=>bcrypt($request->password)

            ]
      );
      return redirect() -> route('user.login');
    }


    public function login(){

        //dd('login here');
  
      
        return view('frontend.pages.user.login-form');
    }

    public function DoLogin(Request $request){

        //dd('login here');
        $credentials = $request->except('_token');

        $login = auth()->attempt($credentials);
        if($login){

            return redirect()->route('homepage');

        }
        return redirect()->back();
    }

    
    public function logout(){
        auth()->logout();
        return redirect()->route('homepage');

        
    }



         

     }

