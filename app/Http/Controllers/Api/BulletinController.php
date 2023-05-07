<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bulletin;
use Illuminate\Http\Request;

class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bulletin =Bulletin::all();
        return response()->json([
            'status' => true,
            'bulletin' => $bulletin
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
        $bulletin = Bulletin::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Bulletin Created successfully!",
            'bulletin' => $bulletin
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bulletin $bulletin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bulletin $bulletin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bulletin $bulletin)
    {
        $bulletin->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Bulletin Updated successfully!",
            'bulletin' => $bulletin
        ], 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bulletin $bulletin)
    {
        $bulletin->delete();

        return response()->json([
            'status' => true,
            'message' => "Bulletin Deleted successfully!",
        ], 200);
    }
}
