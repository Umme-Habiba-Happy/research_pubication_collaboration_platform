<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FrontendUserController extends Controller
{
    //
    public function profile(){
        //dd('Hello Profile');
        return view('frontend.pages.user.profile');
    }


    public function edit($id){
        $users = User::find($id);
         return view('frontend.pages.user.editProfile',compact('users'));
         
    }

    public function mypost(){
    
        $projects=Post::paginate(10);

        return view('frontend.pages.user.postList', compact('projects'));
    }
    public function postForm(){
        $categories=Category::all();

        return view('frontend.pages.user.postForm', compact('categories'));
        return redirect()->route('researcher.post');

    }
    public function postStore(Request $request){

        // dd($request->all());
        $fileName = null;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
        }
        //dd($fileName);

        //dd($request);

        Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'author_name'=>$request->author_name,
            'category_id'=>$request ->category_id,
            'file'=>$fileName
            ]);

        
            return redirect()->route('researcher.post');
    }

    public function update(Request $request, $id){
        //dd($request->all());
        $users=User::find($id);

        // $validate = Validator::make($request->all(),[
        //     'title' =>'required',
        //     'description' =>'required',
        //     'author_name' =>'required',
        //     'category' =>'required',
        //     'file' => 'required'
        // ]);

        // if($validate->fails()){
        //  return redirect()->back()->withErrors($validate);
        // }
        // dd('error');

  
        //  $fileName = null;
        //  if($request->hasFile('file')){
        //      $file = $request->file('file');
        //      $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
        //      $file->storeAs('/uploads', $fileName);
        //  }
        $users->update([
            
            'name'=>$request->full_name,
            'email'=>$request->email,
            'password' =>$request->password,
            
        ]);        
        return redirect()->back();
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

