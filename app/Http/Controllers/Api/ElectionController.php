<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $election = Election::all();

        return response()->json([
            'status' => true,
            'election' => $election
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
        $election = Election::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Election Created successfully!",
            'election' => $election
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Election $election)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Election $election)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Election $election)
    {
        $election->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Election Updated successfully!",
            'election' => $election
        ], 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Election $election)
    {
        $election->delete();

        return response()->json([
            'status' => true,
            'message' => "Election Deleted successfully!",
        ], 200);
    }
}
