<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class UserController extends Controller
{

    public function loginForm()
    {
        return view('Admin.pages.login');
    }

    public function loginStore(Request $request)
    {
        //dd($request->all());
        //validate


        //migration table

        $credentials = $request->except('_token');
        $login = auth()->guard('admin')->attempt($credentials);
        if ($login) {
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors("invalid ");
    }

    public function logout()
    {

        auth()->logout();
        return redirect()->route('admin.login');
    }
    public function list()
    {

        $users = Admin::all();
        return view("Admin.pages.users.list", compact('users'));
    }

  

    public function deleteAdmin($id)
    {
        $user = Admin::find($id);
    
        if ($user) {
            // Perform any additional checks or permissions if needed
            $user->delete();
    
            // Redirect back or to a specific route after deletion
            return redirect()->route('users.list')->with('success', 'user deleted successfully');
        } else {
            // Handle the case where the post is not found
            return redirect()->route('users.list')->with('error', 'user not found');
        }
    }


    public function form()
    {
        return view('Admin.pages.users.form');
    }



    public function store(Request $request)
    {

        $fileName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
        }
        Admin::create(
            [


                'name' => $request->user_name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone' => '01993403311',
                'role' => $request->role,
                'image' => $fileName

            ]
        );
        return redirect()->route('users.list');
    }




 
    public function edit($id)
    {
        $users = Admin::find($id);
        return view('admin.pages.users.editForm', compact('users'));
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $users = Admin::find($id);
        //dd($users);

        if ($users) {
            $fileName = $users->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('/uploads', $fileName);
            }
            $users->update([


                'name' => $request->user_name,
                //'email' => $request->email,
               // 'password' => bcrypt($request->password),
                //'role' => $request->role,
                'image' => $fileName

            ]);

            return redirect()->route('users.list');
        }
    }
}
