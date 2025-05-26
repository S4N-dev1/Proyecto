<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Provedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


public function index()
{
    $productos = Producto::latest()->take(6)->get(); // Los 6 productos más recientes o destacados
    return view('ABPLANDING', compact('productos'));
}


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
            'existencias' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [], [
            'nombre' => 'nombre',
            'codigobarras' => 'código de barras',
            'descripcion' => 'descripción',
            'precio' => 'precio',
            'existencias' => 'existencias',
        ]);

        $data = $request->only(['id_provedor', 'nombre', 'codigobarras', 'descripcion', 'precio', 'existencias']);

        // Manejo de la foto
        if ($request->hasFile('foto')) {
            $ruta = $request->file('foto')->store('productos', 'public');
            $data['foto'] = $ruta;
        }

        Producto::create($data);

        return redirect()->route('producto.index')->with('success', 'Producto agregado correctamente');
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
            'existencias' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [], [
            'nombre' => 'nombre',
            'codigobarras' => 'código de barras',
            'descripcion' => 'descripción',
            'precio' => 'precio',
            'existencias' => 'existencias',
        ]);

        $data = $request->only(['id_provedor', 'nombre', 'codigobarras', 'descripcion', 'precio', 'existencias']);

        // Si hay una nueva foto
        if ($request->hasFile('foto')) {
            // Eliminar la foto antigua si existe
            if ($producto->foto && Storage::disk('public')->exists($producto->foto)) {
                Storage::disk('public')->delete($producto->foto);
            }

            // Guardar la nueva foto
            $ruta = $request->file('foto')->store('productos', 'public');
            $data['foto'] = $ruta;
        }

        // Actualizar el producto
        $producto->update($data);

        return redirect()->route('producto.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        // Eliminar la foto si existe
        if ($producto->foto && Storage::disk('public')->exists($producto->foto)) {
            Storage::disk('public')->delete($producto->foto);
        }

        // Eliminar el producto
        $producto->delete();

        return redirect()->route('producto.index')->with('success', 'Producto eliminado correctamente');
    }
}
