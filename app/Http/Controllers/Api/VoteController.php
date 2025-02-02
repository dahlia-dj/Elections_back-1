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
        return response()->json($vote, 200);
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
        $this->validate(
            $request,
            [
                'date' => 'required',
                'id_election' => 'required|max:100',
                'id_bulletin' => 'required|max:5',
                'id_participant' => 'required|max:2',
            ]
        );

        try {
            DB::beginTransaction();
            $vote = vote::create([
                'date' => $request->date,
                'id_election' => $request->id_election,
                'id_bulletin' => $request->id_bulletin,
                'id_participant' => $request->id_participant,
            ]);
            DB::commit();
            return response()->json($vote, 201);
        } catch (\Throwable $th) {
            return response()->json("{'error: Imposible de sauvegarder le vote'}", 404);
        }
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
    public function update(Request $request, $id)
    {
        try {
            $vote = vote::find($id);
            $vote->update($request->all());
            response()->json("{'Modification réussie du vote'}", 200);
            return $vote;
        } catch (Throwable $error) {
            return response()->json("{'error: Imposible de mettre a jour le vote'}", 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        try {
            $vote = vote::find($id);
            $vote->delete();
            return response()->json("{'Suppresion réussie du vote'}", 200);
        } catch (Throwable $error) {
            return response()->json("{'error: Imposible de supprimé le vote'}", 404);
        }
    }

    public function Resultat($id){
    }
}
