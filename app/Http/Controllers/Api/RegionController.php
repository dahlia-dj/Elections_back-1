<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facade\DB;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $region = Region::all();

        return response()->json([
            'status' => true,
            'region' => $region
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'label'=>'required|max:100'
        ]);
        try{
            \DB::beginTransaction();
            $region = Region::create([
                'label'=>$request->label,
            ]);
            \DB::commit();
            return response()->json([
                'status' => true,
                'message' => "RegionCreated successfully!",
                'region' => $region
            ], 200);
        }
        catch(\Throwable $th){
            return response()->json("{'error:impossible de sauvegarder'}",404);
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        try {
            $region = Region::find($id);
            $region->update($request->all());
            return response()->json("{'Modification réussie de la région'}", 200);
             
        } catch (Throwable $error) {
            return response()->json("{'error: Imposible de mettre a jour la région'}", 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        
        $region=Region::find($id)->delete();
       
        return response()->json([
            'status' => true,
            'message' => "Region deleted successfully!",
        ], 200);
    }
}
