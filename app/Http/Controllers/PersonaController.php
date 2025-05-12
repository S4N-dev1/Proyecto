<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = persona::all();
        return view('persona.index', compact('personas'));
    }

    public function create()
    {
        return view('persona.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|max:10',
            'ap' => 'required|max:10',
            'am' => 'required|max:10',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [], [
            'Nombre' => 'nombre',
            'ap' => 'apellido paterno',
            'am' => 'apellido materno',
        ]);

        $data = $request->only(['Nombre', 'ap', 'am']);

        if ($request->hasFile('foto')) {

            $ruta = $request->file('foto')->store('personas', 'public');
            $data['foto'] = $ruta;
        }

        persona::create($data);

        return redirect()->route('persona.index')->with('success', 'Persona agregada correctamente');
    }


    public function edit(persona $persona)
    {
        return view('persona.edit', compact('persona'));
    }

    public function update(Request $request, persona $persona)
    {
        $request->validate([
            'Nombre' => 'required|max:10',
            'ap' => 'required|max:10',
            'am' => 'required|max:10',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [], [
            'Nombre' => 'nombre',
            'ap' => 'apellido paterno',
            'am' => 'apellido materno',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($persona->foto && Storage::disk('public')->exists($persona->foto)) {
                Storage::disk('public')->delete($persona->foto);
            }

            $ruta = $request->file('foto')->store('personas', 'public');
            $data['foto'] = $ruta;
        }


        $persona->update($data);

        return redirect()->route('persona.index')->with('success', 'Persona actualizada correctamente');
    }

    public function destroy(persona $persona)
    {
        if ($persona->foto && Storage::exists('public/' . $persona->foto)) {
            Storage::delete('public/' . $persona->foto);
        }

        $persona->delete();

        return redirect()->route('persona.index')->with('success', 'Persona eliminada correctamente');
    }
}
