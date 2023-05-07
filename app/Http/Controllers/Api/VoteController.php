<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vote = Vote::all();
        return response()->json([
            'status' => true,
            'vote' => $vote
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vote = Vote::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Vote Created successfully!",
            'vote' => $vote
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vote $vote)
    {
        $vote->update($request->all());
        return response()->json([
            'status' => true,
            'message' => "Vote Updated successfully!",
            'vote' => $vote
        ], 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vote $vote)
    {
       $vote->delete();
       return response()->json ([
        'status' => true,
            'message' => "Vote Deleted successfully!",
        ], 200);
    
    }
}
