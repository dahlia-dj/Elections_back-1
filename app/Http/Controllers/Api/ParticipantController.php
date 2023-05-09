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
        $this->validate($request, [
            'nom' => 'required',
            'num_cni' => 'required|max:20',
            'age' => 'required',
            'sexe'=> 'required',
            'statut'=> 'required',    
            'id_region'=> 'required',
            'login'=> 'required',
            'pwd'=> 'required',
            'email'=> 'required',
            'etat'=> 'required',
            'tel'=> 'required|max:20',
        ]);

        try {
            DB::beginTransaction();
            $participant = Participant::create([
                'nom' => $request->nom,
                'num_cni' => $request->num_cni,
                'age' => $request->age,
                'sexe'=> $request->sexe,
                'statut'=> $request->statut,    
                'id_region'=> $request->id_region,
                'login'=> $request->login,
                'pwd' => $request->pwd,
                'email'=> $request->email,
                'etat'=> $request->etat,
                'tel'=> $request->tel
               
            ]);
            DB::commit();
            return response()->json($participant, 201);
        } catch (\Throwable $th) {
            return response()->json("{'error: Imposible de sauvegarder un participant'}", 404);
        }
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
    public function update(Request $request,  $id)
    {
        try {
            $participant = Participant::find($id);
            $participant->update($request->all());
            return response()->json("{'Modification réussie du participant'}", 200);
             
        } catch (Throwable $error) {
            return response()->json("{'error: Imposible de mettre a jour le participant'}", 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $participant=Participant::find($id)->delete();
       
        return response()->json([
            'status' => true,
            'message' => "Participant deleted successfully!",
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

