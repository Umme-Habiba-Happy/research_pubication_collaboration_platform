<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Researcher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendPostController extends Controller
{
    //

    public function mypostList()
    {

        $projects = Post::where('researcher_id', '=', auth()->user()->id)->get();
        $users = User::all();

        // dd($projects);

        return view('frontend.pages.user.postList', compact('projects', 'users'));
    }


    public function mypostEdit($id)
    {
        $project = Post::find($id);
        $users = User::all();
        $categories = Category::all();

        //dd($projects);
        return view('frontend.pages.user.postEdit', compact('project', 'users', 'categories'));
    }
    public function mypostUpdate(Request $request, $id)
    {
        $project = Post::find($id);

   
        $fileName = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
        }


        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'author_name' => $request->user_id,
            'author_affiliation' => $request->author_affiliation,
            'coauthor_name' => $request->user_id,
            'coauthor_affiliation' => $request->coauthor_affiliation,
            'doi' => $request->doi,
            'reference' => $request->reference_doi ?? null, // Adjust to the actual input field name
            'researcher_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'file' => $fileName,
        ]);

        if ($request->reference_doi) {
            $reference = Post::where('doi', $request->reference_doi)->first();
            if ($reference) {
                $reference->increment('citation_count');
            }
        }


        // Check if a reference DOI is provided
        if ($request->has('reference') && $request->reference !== "") {
            $referencedPost = Post::where('doi', $request->reference)->first();

            // Increment citation count for the referenced post
            if ($referencedPost) {
                $referencedPost->incrementCitationCount();
            }
        }

        return redirect()->route('researcher.post');
    }
    
    public function mypostView($id)
    {
        $project = Post::find($id);
        $comments = Comment::all();
        $users = User::all();

        return view('frontend.pages.user.postView', compact('project', 'comments', 'users'));
    }
    public function postForm()
    {
        $categories = Category::all();
        $users = User::all();
        return view('frontend.pages.user.postForm', compact('categories', 'users'));

        return redirect()->route('researcher.post');
    }
    public function resubmit()
    {
        $categories = Category::all();
        return view('frontend.pages.user.resubmitForm', compact('categories'));
        return redirect()->route('researcher.post');
    }


    public function postStore(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'doi' => 'required|numeric|digits:6',
            // other validation rules for your other fields...
        ]);
        $fileName = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
        }


        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_name' => $request->user_id,
            'author_affiliation' => $request->author_affiliation,
            'coauthor_name' => $request->user_id,
            'coauthor_affiliation' => $request->coauthor_affiliation,
            'doi' => $request->doi,
            'reference' => $request->reference_doi ?? null, // Adjust to the actual input field name
            'researcher_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'file' => $fileName,
        ]);

        if ($request->reference_doi) {
            $reference = Post::where('doi', $request->reference_doi)->first();
            if ($reference) {
                $reference->increment('citation_count');
            }
        }


        // Check if a reference DOI is provided
        if ($request->has('reference') && $request->reference !== "") {
            $referencedPost = Post::where('doi', $request->reference)->first();

            // Increment citation count for the referenced post
            if ($referencedPost) {
                $referencedPost->incrementCitationCount();
            }
        }

        return redirect()->route('researcher.post');
    }
}
