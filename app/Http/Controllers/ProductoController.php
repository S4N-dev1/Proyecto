<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Provedor;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::with('provedor')->get();
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provedores = Provedor::all();
        return view('producto.create', compact('provedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_provedor' => 'required|exists:provedores,id_provedor',
            'nombre' => 'required|string|max:100',
            'codigobarras' => 'required|string|max:50',
            'descripcion' => 'nullable|string|max:255',
            'precio' => 'required|numeric',
            'existencias' => 'required|integer'
        ]);

        Producto::create([
            'id_provedor' => $request->id_provedor,
            'nombre' => $request->nombre,
            'codigobarras' => $request->codigobarras,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'existencias' => $request->existencias
        ]);

        return redirect()->route('producto.index')->with('success', 'Producto agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $provedores = Provedor::all();
        return view('producto.edit', compact('producto', 'provedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'id_provedor' => 'required|exists:provedores,id_provedor',
            'nombre' => 'required|string|max:100',
            'codigobarras' => 'required|string|max:50',
            'descripcion' => 'nullable|string|max:255',
            'precio' => 'required|numeric',
            'existencias' => 'required|integer'
        ]);

        $producto->update([
            'id_provedor' => $request->id_provedor,
            'nombre' => $request->nombre,
            'codigobarras' => $request->codigobarras,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'existencias' => $request->existencias
        ]);

        return redirect()->route('producto.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index')->with('success', 'Producto eliminado correctamente');
    }
}
