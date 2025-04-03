<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = persona::all();
        return view('persona.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|max:10',
            'ap' => 'required|max:10',
            'am' => 'required|max:10',
        ],[],[
            'Nombre' => 'nombre',
            'ap' => 'apellido paterno',
            'am' => 'apellido materno',
        ]);
        persona::create($request->all());
        return redirect()->route('persona.index')->with('success', 'Persona agregada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(persona $personas)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(persona $persona)
    {

        return view('persona.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, persona $persona)
    {
        $request->validate([
            'Nombre' => 'required|max:10',
            'ap' => 'required|max:10',
            'am' => 'required|max:10',
        ],[],[
            'Nombre' => 'nombre',
            'ap' => 'apellido paterno',
            'am' => 'apellido materno',
        ]);
        $persona->update($request->all());
        return redirect()->route('persona.index')->with('success', 'Persona actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(persona $persona)
    {
        $persona->delete();
        return redirect()->route('persona.index')->with('success', 'Persona eliminada correctamente');
    }
}
