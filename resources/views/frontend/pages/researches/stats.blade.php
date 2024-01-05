@extends('frontend.master')
@extends('frontend.partial.singleViewResearchInfo')
@section('content')
<style>
    .research-box {
        border: 2px solid #3498db;
        background-color: #ecf0f1;
        color: #2c3e50;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    .research-box:hover {
        transform: scale(1.05);
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">


    <div>
        <ul class="nav navbar-nav">

            <li><a href="{{route('singleview.overView', $project->id)}}">OverView</a></li>
            <li><a href="{{route('singleview.stats',$project->id)}}">Stats</a></li>
            <li><a href="{{route('singleview.comment',$project->id)}}">Comment</a></li>
            <li><a href="{{route('singleview.cite',$project->id)}}">Citation</a></li>


        </ul>
</nav>


<div class="row">
    <div class="col-md-3">
        <div class="research-box">
            <h3>Downloads</h3>
        </div>

    </div>
    <div class="col-md-3">
        <div class="research-box">
            <h3>Total Reads:{{$total_reads}} </h3>
        </div>

    </div>
    <div class="col-md-3">
        <div class="research-box">
            <h3>Recommended</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="research-box">
            <h3>Total Count: <span id="citation_count">{{$project->citation_count}} </h3>
        </div>
        <!-- <button onclick="updateCitationCount()">Update Citation Count</button> -->
    </div>
</div>

<!-- <script>
    function updateCitationCount() {
        // Get the value entered by the user in the reference DOI input
        var referenceDOI = document.getElementById('reference').value;

        // Send DOI data to the server for processing
        fetch('/api/updateCitationCount', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ doi: referenceDOI }),
        })
        .then(response => {
            if (response.ok) {
                // Retrieve updated citation count from the server response
                return response.json();
            }
            throw new Error('Network response was not ok.');
        })
        .then(updatedCitationCount => {
            // Update the UI to display the updated citation count
            document.getElementById('citation_count').innerText = updatedCitationCount;
        })
        .catch(error => {
            console.error('Error during citation count update:', error);
        });
    }
</script> -->

@endsection