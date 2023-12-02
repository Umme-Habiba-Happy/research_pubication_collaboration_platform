<?php

namespace App\Http\Controllers\Backend;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function category(){
        $categories=Category::paginate(3);
        return view ('Admin.pages.category.list', compact('categories'));
    }
    public function categoryForm(){
        return view ('Admin.pages.category.form');
    }
    public function store(Request $request){
        // $validate = Validator($request->all(),[
        //     'categoryName'=>'requierd',
        //     'categoryDescription'=>'required'

        // ]);
        // if($validate->fails()){
        //     return redirect()->back()->withErrors($validate);
        // }
        Category::create(
            [
                'categoryName'=>$request->category_name,
                'categoryDescription'=>$request->category_description
            ]
            );
            return redirect() -> route('category.list');

    }
}
