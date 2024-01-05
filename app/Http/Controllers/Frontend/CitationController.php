<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Citation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CitationController extends Controller
{
    //
    public function updateCitationCount(Request $request)
    {
        // Validate the request
        $request->validate([
            'doi' => 'required|string',
        ]);

        // Get the DOI from the request
        $doi = $request->input('doi');

        // Find or create a citation based on the DOI
        $citation = Citation::firstOrNew(['doi' => $doi], ['count' => 0]);
        $citation->count++; // Increment the citation count
        $citation->save();

        // Return the updated citation count
        return response()->json(['citation_count' => $citation->count]);
    }

}
