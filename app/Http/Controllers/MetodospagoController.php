<?php

namespace App\Http\Controllers;

use App\Models\metodospago;
use App\Models\persona;
use Illuminate\Http\Request;

class MetodospagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metodospagos = metodospago::all();
        return view('metodospago.index', compact('metodospagos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('metodospago.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        metodospago::create($request->all());
        return redirect()->route('metodospago.index')->with('success', 'Metodo de pago agregado ');
    }

    /**
     * Display the specified resource.
     */
    public function show(metodospago $metodospagos)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(metodospago $metodospago)
    {

        return view('metodospago.edit', compact('metodospago'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, metodospago $metodospago)
    {

        $metodospago->update($request->all());
        return redirect()->route('metodospago.index')->with('success', 'Metodo de pago actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(metodospago $metodospago)
    {
        $metodospago->delete();
        return redirect()->route('metodospago.index')->with('success', 'Metodo de pago eliminado');
    }
}
