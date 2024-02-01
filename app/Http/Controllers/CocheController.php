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
        $request->validate([
            // 'propietario_id' => 'required|exists:propietario,id',
            'nombre_propietario' => 'required|max:255',
            'marca' => 'required|max:50',
            'modelo' => 'required|max:50',
            'matricula' => ['required', 'regex:/^[0-9]{4}[A-Za-z]{3}$/'],
        ]);
    
        $coche = new Coche();
    
        $coche->propietario_id = $request->propietario_id;
        $coche->nombre_propietario = $request->nombre_propietario; 
        $coche->marca = $request->marca;
        $coche->modelo = $request->modelo;
        $coche->matricula = $request->matricula;
    
        $coche->save();
    
        return response()->json(['message' => 'Coche creado exitosamente'], 201);
    }

    public function show(Coche $coche, $id)
    {
        $coche = Coche::find($id);
        return $coche;
    }

    public function update(Request $request, Coche $coche, $id)
    {
        $coche = Coche::find($id);
        $coche->propietario_id = $request->propietario_id;
        $coche->marca = $request->marca;
        $coche->modelo = $request->modelo;
        $coche->matricula = $request->matricula;

        $coche->save();
        return $coche;

    }

    public function destroy(Coche $coche, $id)
    {
        $coche = Coche::destroy($id);
        return $coche;
    }
}
