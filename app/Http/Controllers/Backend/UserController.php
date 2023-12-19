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
    public function delete($id)
    {
        $users = User::find($id);
        if ($users) {
            $users->delete();
        }

        return redirect()->back();
    }
    public function edit($id)
    {
        $users = Admin::find($id);
        return view('admin.pages.users.editForm', compact('users'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $users = User::find($id);

        if ($users) {
            $fileName = $users->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('/uploads', $fileName);
            }
            $users->update([


                'name' => $request->user_name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
                'image' => $fileName

            ]);

            return redirect()->route('users.list');
        }
    }
}
