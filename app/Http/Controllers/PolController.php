<?php

namespace App\Http\Controllers;

use App\Pol;
use Illuminate\Http\Request;

class PolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Pol::all();
        return view('welcome', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pol = new Pol();
        $pol->nombre = $request->post('nombre');
        $pol->velocidad = $request->post('velocidad');
        $pol->posicion = $request->post('posicion');
        $pol->fisico = $request->post('fisico');
        $pol->ritmo = $request->post('ritmo');
        $pol->regate = $request->post('regate');
        $pol->save();

        return redirect()->route("pol.index")->with("success", "Agregado con exito!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pol $id)
    {
        $pol = Pol::find($id);
        return view('eliminar', compact('pol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pol $id)
    {
        $pol = Pol::find($id);
        return view('actualizar', compact('pol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pol $id)
    {
        $pol = Pol::find($id);
        $pol->nombre = $request->post('nombre');
        $pol->velocidad = $request->post('velocidad');
        $pol->posicion = $request->post('posicion');
        $pol->fisico = $request->post('fisico');
        $pol->ritmo = $request->post('ritmo');
        $pol->regate = $request->post('regate');    

        $pol->save();

        return redirect()->route("empanada.index")->with("success", "Editado con exito!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pol $id)
    {
        $pol = Pol::find($id);
        $pol->delete();
        return redirect()->route("empanada.index")->with("success", "Eliminado con exito!");
    }
}
