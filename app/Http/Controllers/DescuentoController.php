<?php

namespace App\Http\Controllers;

use App\Models\descuento;
use App\Models\persona;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $descuentos = descuento::all();
        return view('descuento.index', compact('descuentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('descuento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'TipoDescuento' => 'required|max:10',
            'MontoDescuento' => 'required|max:10',

        ],[],[
            'TipoDescuento' => 'tipo de descuento',
            'MontoDescuento' => 'Monto de descuento ',

        ]);
        descuento::create($request->all());
        return redirect()->route('descuento.index')->with('success', 'Tipo de descuento agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(descuento $descuento)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(descuento $descuento)
    {

        return view('descuento.edit', compact('descuento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, descuento $descuento)
    {
        $request->validate([
            'TipoDescuento' => 'required|max:10',
            'MontoDescuento' => 'required|max:10',

        ],[],[
            'TipoDescuento' => 'tipo de descuento',
            'MontoDescuento' => 'Monto de descuento ',
        ]);
        $descuento->update($request->all());
        return redirect()->route('descuento.index')->with('success', 'Decuento actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(descuento $descuento)
    {
        $descuento->delete();
        return redirect()->route('descuento.index')->with('success', 'Tipo de descuento eliminado');
    }
}
