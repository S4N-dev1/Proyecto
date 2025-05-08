<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provedor;
class ProvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provedores = Provedor::with('persona')->get();
        return view('provedor.index', compact('provedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = \App\Models\Persona::all();
        return view('provedor.create', compact('personas'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => 'required|exists:personas,id_personas'
        ]);

        Provedor::create([
            'id_persona' => $request->id_persona
        ]);

        return redirect()->route('provedor.index')->with('success', 'Proveedor agregado correctamente');
    }


    /**
     * Display the specified resource.
     */
    public function show(provedor $provedor)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provedor $provedor)
    {
        $personas = \App\Models\Persona::all();
        return view('provedor.edit', compact('provedor', 'personas'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provedor $provedor)
    {
        $request->validate([
            'id_persona' => 'required|exists:personas,id_personas'
        ]);

        $provedor->update([
            'id_persona' => $request->id_persona
        ]);

        return redirect()->route('provedor.index')->with('success', 'Proveedor actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(provedor $provedor)
    {
    $provedor->delete();
    return redirect()->route('provedor.index')->with('success', 'Provedor eliminado correctamente');
    }
}
