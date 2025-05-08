<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::with('persona')->get();
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = \App\Models\Persona::all();
        return view('cliente.create', compact('personas'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => 'required|exists:personas,id_personas'
        ]);

        cliente::create([
            'id_persona' => $request->id_persona
        ]);

        return redirect()->route('cliente.index')->with('success', 'Cliente agregado correctamente');
    }


    /**
     * Display the specified resource.
     */
    public function show(cliente $clientes)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $personas = \App\Models\Persona::all();
        return view('cliente.edit', compact('cliente', 'personas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'id_persona' => 'required|exists:personas,id_personas'
        ]);

        $cliente->update([
            'id_persona' => $request->id_persona
        ]);

        return redirect()->route('cliente.index')->with('success', 'Cliente actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index')->with('success', 'Cliente eliminado correctamente');
    }
}
