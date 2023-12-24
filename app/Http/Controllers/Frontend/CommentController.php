<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //
    
public function store(Request $request, $researchId)
{
    //dd($researchId);   
    $request->validate([
        'comment' => 'required|string|max:255',
    ]);

    Comment::create([
        'user_id' => auth()->user()->id,
        'post_id' => $researchId,
        'comment' => $request->comment,
    ]);

    return redirect()->back();
}

}
