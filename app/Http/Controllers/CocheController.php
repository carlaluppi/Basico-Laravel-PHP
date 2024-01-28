<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    public function index()
    {
        $coches= Coche::all();
        return response()->json($coches);
    }

    public function store(Request $request)
    {   
        $coche = new Coche();

        $request->validate([
        'id_propietario' => 'required|exists:propietario,id',
        'marca'=>'required',
        'modelo'=>'required',
        'matricula'=>'required',
        ]);
        $coche->id_propietario = $request->id_propietario;
        $coche->marca = $request->marca;
        $coche->modelo = $request->modelo;
        $coche->matricula = $request->matricula;

        $coche->save();
    }

    public function show(Coche $coche, $id)
    {
        $coche = Coche::find($id);
        return $coche;
    }

    public function update(Request $request, Coche $coche, $id)
    {
        $coche = Coche::find($id);
        $coche->id_propietario = $request->id_propietario;
        $coche->marca = $request->marca;
        $coche->modelo = $request->modelo;
        $coche->matricula = $request->matricula;

        $coche->Save();
        return $coche;

    }

    public function destroy(Coche $coche, $id)
    {
        $coche = Coche::destroy($id);
        return $coche;
    }
}
