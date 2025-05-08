<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Descuentosventa;
use App\Models\Venta;
use App\Models\Descuento;

class DescuentosventaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $descuentosventas = DescuentosVenta::with(['venta', 'descuento'])->get();
        return view('descuentosventa.index', compact('descuentosventas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ventas = Venta::all();
        $descuentos = Descuento::all();
        return view('descuentosventa.create', compact('ventas', 'descuentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_venta' => 'required|exists:ventas,id_venta',
            'DescuentoID' => 'required|exists:descuentos,DescuentoID'
        ]);

        DescuentosVenta::create([
            'id_venta' => $request->id_venta,
            'DescuentoID' => $request->DescuentoID
        ]);

        return redirect()->route('descuentosventa.index')->with('success', 'Descuento aplicado a la venta correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Descuentosventa $descuentosventa)
    {
        $ventas = Venta::all();
        $descuentos = Descuento::all();
        return view('descuentosventa.edit', compact('descuentosventa', 'ventas', 'descuentos'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DescuentosVenta $descuentosventa)
    {
        $request->validate([
            'id_venta' => 'required|exists:ventas,id_venta',
            'DescuentoID' => 'required|exists:descuentos,DescuentoID'
        ]);

        $descuentosventa->update([
            'id_venta' => $request->id_venta,
            'DescuentoID' => $request->DescuentoID
        ]);

        return redirect()->route('descuentosventa.index')->with('success', 'Descuento de la venta actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DescuentosVenta $descuentosventa)
    {
        $descuentosventa->delete();
        return redirect()->route('descuentosventa.index')->with('success', 'Descuento de la venta eliminado correctamente');
    }
}
