<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //
    
public function store(Request $request, $id)
{
    //dd($researchId);   
    $request->validate([
        'comment' => 'required|max:255',
    ]);

    $comment = new Comment();
    $comment->comment = $request->input('comment');
    $comment->user_id = auth()->user()->id;
    $comment->post_id = $id; // Correct the foreign key name
    $comment->save();

    return redirect()->back();
}

}
