<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;


class PropietarioController extends Controller
{
    public function index()
    {
        $propietarios =  Propietario::all();
        return response()->json($propietarios);
    }

    public function store(Request $request)
    {   
        $propietario = new Propietario();

        $request->validate([
        'coche_id' => 'required|exists:coches,id',
        'nombre'=>'required',
        'dni'=>'required',
        ]);

        $propietario->coche_id = $request->coche_id;
        $propietario->nombre = $request->nombre;
        $propietario->dni = $request->dni;

        $propietario->save();
    }

    public function show(Propietario $propietario, $id)
    {
        $propietario = Propietario::find($id);
        return $propietario;
    }

    public function update(Request $request, Propietario $propietario, $id)
    {
        $propietario = Propietario::find($id);
        
        $propietario->coche_id = $request->coche_id;
        $propietario->nombre = $request->nombre;
        $propietario->dni = $request->dni;
        

        $propietario->Save();
        return $propietario;

    }

    public function destroy(Propietario $propietario, $id)
    {
        $propietario = Propietario::destroy($id);
        return $propietario;
    }
}
