<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class FrontendUserController extends Controller
{
    //
 
    public function authorView($id){

     
        $user=User::find($id);
        //dd($users);
        return view('frontend.pages.user.researcherProfile',compact('user'));

        
    }
    public function authorPostView($id){
        $project = Post::find($id);
        return view('frontend.pages.user.authorPostView',compact('project'));

    }
    // 
    public function  authorResearch($researcher_id){
//dd($researcher_id);

        $posts= Post::where('researcher_id',$researcher_id)->get();
        //dd($project);
//$user = User::find();
        return view('frontend.pages.user.authorResearch', compact('posts'));
    }
    public function deletePost(Request $request, $id)
{
    // Validate the request if necessary

    $post = Post::where('researcher_id', auth()->user()->id)->findOrFail($id);
    $post->delete();

    return redirect()->back()->with('success', 'Post deleted successfully');
}

    public function profile(){

   
        return view('frontend.pages.user.profile');
    }

    public function userProfile(){
        //dd('Hello Profile');
        return view('frontend.pages.user.userProfile');
    }
    public function stats(){
        //dd('Hello Profile');
       $projects = Post::all();
       //dd($projects);
        return view('frontend.pages.user.stats',compact('projects'));
    }
    
    public function userResearch(){
        //dd('Hello Profile');
        $projects = Post::where('researcher_id', '=', auth()->user()->id)->get();

        // dd($projects);

        return view('frontend.pages.user.postList', compact('projects'));
    }


    public function edit($id){
        $users = User::find($id);
         return view('frontend.pages.user.editProfile',compact('users'));         
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

  
         $fileName = auth()->user()->image;
         if($request->hasFile('image')){
             $file = $request->file('image');
             $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
             $file->storeAs('/uploads', $fileName);
         }
        $users->update([            
            'name'=>$request->full_name,
            'email'=>$request->email,
            'degree' =>$request->degree,
            'position' =>$request->position,
            'institution' =>$request->institution,
            'department' =>$request->department,
            'skills' =>$request->skills,
            'address' =>$request->address,
            'country' =>$request->country,
            'image'=> $fileName,
       
            
        ]);    
       // dd($request->all());
       notify()->success('User Update Successfully!');    
        return redirect()->route('Profile');
    }


    public function registration(){

        //dd('login here');

        return view('frontend.pages.user.registration-form');
    }

    public function doRegistration(Request $request){
        //dd($request->all());
        $fileName = null;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/user/image', $fileName);
        }
        User::create(
            [            
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'researcher',
            'degree' =>'BCSE',
            'position' =>'student',
            'institution' =>'iubat',
            'department' =>'CSE',
            'skills' =>'data science',
            'address' =>'dhaka',
            'country' =>'Bangladesh', 
            'image' => $fileName,
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

