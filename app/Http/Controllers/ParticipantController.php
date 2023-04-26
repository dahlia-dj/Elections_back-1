<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;
use App\Models\Participant;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("formulaire_participant");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $participant = Participant :: all();
        return view("liste_participant", compact("participant"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    $request ->validate([
    //     'nom'=>'required',
    //     'num_cni'=>'required',
    //     'age'=>'required',
    //     'sexe'=>'required',
    //     'statut'=>'required',
    //     'id_region'=>'required',
    //     'login'=>'required',
    //     'pwd'=>'required',
    //     'email'=>'required',
    //     'etat'=>'required',
    //     'tel'=>'required',
    //     ]);
        try{
            \DB::beginTransaction();

            $participant = new Participant;
            $participant->nom=$request->nom;
            $participant->num_cni=$request->cni;
            $participant->age=$request->age;
            $request->radiobouton=="on"? $participant->sexe="F" : $participant->sexe="M";
            $request->radiobouton2== "on"? $participant->statut= "E": $participant->statut= "C" ;
            $participant->id_region=$request->id_region;
            $participant->login=$request->login;
            $participant->pwd=$request->password;
            $participant->email=$request->email;
            $request->radiobouton3== "on"? $participant->etat=1 :$participant->etat=0;
            $participant->tel=$request->phone;

            $participant->save();
            \DB::commit(); 
            return redirect("formulaire_participant")->with('success','Le formulaire a ete soumis avec succes!');
        } catch(\Thowable $th){
            dd($th);
            return back();
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            \DB::beginTransaction();
            $participant = Participant::find($id);
            \DB::commit(); 
            return view("update_participant", compact("participant"));
 
        } catch (\Throwable $th) {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            \DB::beginTransaction();

            // $request ->validate([
            //     'nom'=>'required',
            //     'num_cni'=>'required',
            //     'age'=>'required',
            //     'sexe'=>'required',
            //     'statut'=>'required',
            //     'id_region'=>'required',
            //     'login'=>'required',
            //     'pwd'=>'required',
            //     'email'=>'required',
            //     'etat'=>'required',
            //     'tel'=>'required',
            //     ]);  

            $participant = Participant::find($request->id);
            $participant->nom=$request->nom;
            $participant->num_cni=$request->cni;
            $participant->age=$request->age;
            $participant->sexe=$request->radiobouton;
            $participant->statut=$request->radiobouton2;
            $participant->id_region=$request->id_region;
            $participant->login=$request->login;
            $participant->pwd=$request->password;
            $participant->email=$request->email;
            $participant->etat=$request->radiobouton3;
            $participant->tel=$request->tel;
            $participant->update();
            \DB::commit(); 
        return redirect("/participant_liste")->with('success','Le formulaire a ete modifie avec succes!');;

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            \DB::beginTransaction();
            Participant::find($id)->delete();
            \DB::commit(); 
            return redirect("/participant_liste")->with('success','Le formulaire a ete supprimme avec succes!');;
         } catch (\Throwable $th) {
            dd($th);
            return back();
    }
}
}