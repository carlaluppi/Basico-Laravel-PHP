<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coches= Coche::all();
        return response()->json($coches);
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
        $coche = new Coche();

        $request->validate([
        'marca'=>'require|max:255',
        'modelo'=>'require',
        'matricula'=>'require',
        ]);

        $coche->marca = $request->marca;
        $coche->modelo = $request->modelo;
        $coche->matricula = $request->matricula;

        $coche->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Coche $coche, $id)
    {
        $coche = Coche::find($id);
        return $coche;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coche $coche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coche $coche, $id)
    {
        $coche = Coche::findOrFail($request->$id);

        $coche->marca = $request->marca;
        $coche->modelo = $request->modelo;
        $coche->matricula = $request->matricula;

        $coche->Save();
        return $coche;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coche $coche, $id)
    {
        $coche = Coche::destroy($id);
        return $coche;
    }
}
