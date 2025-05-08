<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[],[
            'Nombre' => 'nombre',
            'ap' => 'apellido paterno',
            'am' => 'apellido materno',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('imgenes'), $filename);
            $data['foto'] = $filename;
        }


        persona::create($data);

        return redirect()->route('persona.index')->with('success', 'Persona agregada correctamente');
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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[],[
            'Nombre' => 'nombre',
            'ap' => 'apellido paterno',
            'am' => 'apellido materno',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($persona->foto && file_exists(public_path('imgenes/' . $persona->foto))) {
                unlink(public_path('imgenes/' . $persona->foto));
            }

            $filename = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('imgenes'), $filename);
            $data['foto'] = $filename;
        }


        $persona->update($data);

        return redirect()->route('persona.index')->with('success', 'Persona actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(persona $persona)
    {
        // Eliminar la foto del almacenamiento si existe
        if ($persona->foto && Storage::exists('public/' . $persona->foto)) {
            Storage::delete('public/' . $persona->foto);
        }

        $persona->delete();
        return redirect()->route('persona.index')->with('success', 'Persona eliminada correctamente');
    }
}
