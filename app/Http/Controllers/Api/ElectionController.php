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
        $this->validate($request, [
            'date' => 'required',
            'statut' => 'required',
            'label' => 'required|max:20',
            'description' => 'required|max:300',
        ]);

        try {
            DB::beginTransaction();
            $election = Election::create([
                'date' => $request->date,
                'statut' => $request->statut,
                'label' => $request->label,
                'description' => $request->description,

            ]);
            DB::commit();
            return response()->json($election, 201);
        } catch (\Throwable $th) {
            return response()->json("{'error: Imposible de sauvegarder une élection'}", 404);
        }
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
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'date' => 'required',
            'statut' => 'required',
            'label' => 'required|max:20',
            'description' => 'required|max:300',
        ]);

        try {
            $election = Election::find($id);
            $election->update($request->all());
            return response()->json("{'Modification réussie de l'élection'}", 200);
        } catch (Throwable $error) {
            return response()->json("{'error: Imposible de mettre a jour l'élection'}", 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        try {
            $election = Election::find($id);
            $election->delete();
            return response()->json("{'Suppresion réussie de l'élection'}", 200);
        } catch (Throwable $error) {
            return response()->json("{'error: Imposible de supprimé l'élection'}", 404);
        }
    }   
}
