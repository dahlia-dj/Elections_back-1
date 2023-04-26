<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;
use \App\Models\Region;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nom = "Atangana";
        return view("formulaire_region");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $liste = Region::all();
        return view("liste_region",compact('liste'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            \DB::beginTransaction();
            Region::create(['label'=>$request->Region]);
            \DB::commit(); 
            return view("formulaire_region");
        } catch(\Thowable $th){
            return back();
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            \DB::beginTransaction();
            $reg = Region::find($id);
            \DB::commit(); 
            return view("update_region", compact("reg"));
 
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
            Region::find($request->id)->update(['label'=>$request->label]);
            \DB::commit(); 
        return redirect("/region_liste");

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
        Region::find($id)->delete();
        \DB::commit(); 
        return redirect("/region_liste");
     } catch (\Throwable $th) {
        dd($th);
        return back();
     }   
    }
}
