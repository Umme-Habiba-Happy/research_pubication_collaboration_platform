<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
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
public function categoryEdit(){
    return view ('Admin.pages.category.form');


}


    public function deleteCategory($id){
        $category = Category::find($id);

    if ($category) {
        // Perform any additional checks or permissions if needed
        $category->delete();

        // Redirect back or to a specific route after deletion
        return redirect()->route('category.list')->with('success', 'Post deleted successfully');
    } else {
        // Handle the case where the post is not found
        return redirect()->route('category.list')->with('error', 'Post not found');
    }

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
