<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facade\DB;
use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participant = Participant::all();

        return response()->json([
            'status' => true,
            'participant' => $participant
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
    public function store(StoreParticipantRequest $request)
    {
        $participant = Participant::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Participant Created successfully!",
            'participant' => $participant
        ], 200);
    }
    /**
     * Display the specified resource.
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participant $participant)
    {
        $participant->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Participant Updated successfully!",
            'participant' => $participant
        ], 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        $participant->delete();

        return response()->json([
            'status' => true,
            'message' => "Participant Deleted successfully!",
        ], 200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function onoff( $id)
    {
        try{
        \DB::begintransaction();   
        $part=Participant::find($id);
        $part->etat = !($part -> etat);
        $part->update();
        \DB::commit();
        return response()->json("operation reussie");
        }
        catch(Throwable $th){
            dd($th);
            return response()->json("echec de l'operation");
        
        }
        
       
    }
    

}

