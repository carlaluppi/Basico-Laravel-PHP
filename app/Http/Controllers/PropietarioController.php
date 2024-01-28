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
        'nombre'=>'required',
        'dni'=>'required',
        ]);

        
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
