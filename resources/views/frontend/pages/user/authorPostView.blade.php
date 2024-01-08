@extends('frontend.master')
@section('content')

<div class="row">
    <div class="col-sm-10">
        <div class="card card-white mb-5">

            <div class="card-heading clearfix border-bottom mb-4">
                <h4 class="card-title"> {{$project->author_name}}'s post</h4>
            </div>
            <hr>
            <div class="card-body">
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-body">
                                <div class="mb-3">
                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Research Title:</span>
                                    <span class="btn-gray">{{$project->title}}</span>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Author Name:</span>
                                    <span class="btn-gray">{{$project->author_name}}</span>

                                </div>
                                <hr>
                                <div class="mb-3">
                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Co-Author Name:</span>
                                    <span class="btn-gray">{{$project->coauthor_name}}</span>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Category:</span>
                                    <span class="btn-gray">{{$project->category->categoryName}}</span>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Description</span>
                                    <span class="btn-gray">{{$project->description}}</span>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">DOI :</span>
                                    <span class="btn-gray">{{$project->doi}}</span>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0 ">Refernce DOI :</span>
                                    <span class="btn-gray">{{$project->reference}}</span>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">File:</span>
                                    <span class="btn-gray">
                                        <td><a href="{{url('/uploads/'. $project->file)}} " target="_blank">{{$project->file}}</a></td>
                                    </span>
                                </div>
                                <hr>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        hhh

    </div>
</div>
@endsection