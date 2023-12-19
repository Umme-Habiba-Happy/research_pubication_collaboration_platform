<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Read;
use App\Models\Download;
use App\Models\Researcher;
use App\Models\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class FrontendResearchController extends Controller
{
    //
    public function singleResearchOverview($id){
        //dd('Hello Profile');
        $project = Post::find($id);
        $count=Download::where('post_id',$id)->count();
        $total_reads=Read::where('post_id',$id)->count();
        $checkRead=Read::where('user_id',auth()->user()->id)->where('post_id',$id)->first();
        if(!$checkRead)
        {
            Read::create([
                'user_id'=>auth()->user()->id,
                'post_id'=>$id
            ]);
        }      
          return view('frontend.pages.researches.overview',compact('project','count', 'total_reads'));
    }
    public function singleResearchStats($id){
        //dd('Hello Profile');
        $project = Post::find($id);
        $count=Download::where('post_id',$id)->count();
        $total_reads=Read::where('post_id',$id)->count();
        $checkRead=Read::where('user_id',auth()->user()->id)->where('post_id',$id)->first();
        if(!$checkRead)
        {
            Read::create([
                'user_id'=>auth()->user()->id,
                'post_id'=>$id
            ]);
        } 

        return view('frontend.pages.researches.stats',compact('project','count', 'total_reads'));
    }
    public function singleViewComment($id){
        //dd('Hello Profile');
        $project = Post::find($id);
        $count=Download::where('post_id',$id)->count();
        $total_reads=Read::where('post_id',$id)->count();
        $checkRead=Read::where('user_id',auth()->user()->id)->where('post_id',$id)->first();
        if(!$checkRead)
        {
            Read::create([
                'user_id'=>auth()->user()->id,
                'post_id'=>$id
            ]);
        } 
       
        return view('frontend.pages.researches.comment',compact('project','count', 'total_reads'));
    }
    public function singleViewCite($id){
        //dd('Hello Profile');
        $project = Post::find($id);
        $count=Download::where('post_id',$id)->count();
        $total_reads=Read::where('post_id',$id)->count();
        $checkRead=Read::where('user_id',auth()->user()->id)->where('post_id',$id)->first();
        if(!$checkRead)
        {
            Read::create([
                'user_id'=>auth()->user()->id,
                'post_id'=>$id
            ]);
        } 
       
        return view('frontend.pages.researches.cite',compact('project','count', 'total_reads'));
    }
    public function single_research_download($id){

        $post=Post::find($id);
        $checkDownload=Download::where('user_id',auth()->user()->id)->where('post_id',$id)->first();
       
        if(!$checkDownload)
        {
            Download::create([
                'user_id'=>auth()->user()->id,
                'post_id'=>$id
            ]);
        }
  //PDF file is stored under project/public/download/info.pdf
  $file= public_path(). "/uploads/".$post->file;

  $headers = array(
            'Content-Type: application/pdf',
          );

  return Response::download($file, 'filename.pdf', $headers);
       

    }
    public function research()
    {
        $projects = Post::where('status', '=', 'Approved')->get();
    
        // Assuming `published_date` is the column name in your database
        $projects->each(function ($project) {
            $project->publishedDate = Carbon::parse($project->published_date)->format('F j, Y');
        });
    
        return view("frontend.pages.researches.research", compact('projects'));
    }
    

    public function singleResearch($id){
        $project = Post::find($id);
        $count=Download::where('post_id',$id)->count();
        $total_reads=Read::where('post_id',$id)->count();
        $checkRead=Read::where('user_id',auth()->user()->id)->where('post_id',$id)->first();
        if(!$checkRead)
        {
            Read::create([
                'user_id'=>auth()->user()->id,
                'post_id'=>$id
            ]);
        }
        // dd($project);
        return view("frontend.pages.researches.singleView",compact('project','count','total_reads'));
    }

    public function secondResearch(){

        return view("frontend.pages.researches.secondResearch");
    }

    public function thirdResearch(){

        return view("frontend.pages.researches.thirdResearch");
    }

}
