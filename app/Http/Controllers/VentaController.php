<?php

namespace App\Http\Controllers;

use App\Models\Metodospago;
use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Empleado;


class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = \DB::table('ventas')
            ->join('clientes', 'ventas.id_cliente', '=', 'clientes.id_cliente')
            ->join('empleados', 'ventas.id_empleado', '=', 'empleados.id_empleado')
            ->join('metodospagos', 'ventas.MetodoPagoID', '=', 'metodospagos.MetodoPagoID')
            ->select(
                'ventas.id_venta',
                'ventas.FechaDeVenta',
                'ventas.TotalConDescuento',
                'clientes.id_cliente',
                'clientes.id_persona',
                'empleados.id_empleado',
                'empleados.id_persona',
                'metodospagos.NombreMetods as metodo_pago',
                'metodospagos.MetodoPagoID'
            )
            ->get();

        return view('venta.index', compact('ventas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $empleados = Empleado::all();
        $metodosPago = MetodosPago::all();
        return view('venta.create', compact('clientes', 'empleados', 'metodosPago'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'id_empleado' => 'required|exists:empleados,id_empleado',
            'MetodoPagoID' => 'required|exists:metodospagos,MetodoPagoID',
            'FechaDeVenta' => 'required|date',
            'TotalConDescuento' => 'required|numeric'
        ]);

        Venta::create([
            'id_cliente' => $request->id_cliente,
            'id_empleado' => $request->id_empleado,
            'MetodoPagoID' => $request->MetodoPagoID,
            'FechaDeVenta' => $request->FechaDeVenta,
            'TotalConDescuento' => $request->TotalConDescuento
        ]);

        return redirect()->route('venta.index')->with('success', 'Venta registrada correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        $clientes = Cliente::all();
        $empleados = Empleado::all();
        $metodosPago = MetodosPago::all();
        return view('venta.edit', compact('venta', 'clientes', 'empleados', 'metodosPago'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'id_empleado' => 'required|exists:empleados,id_empleado',
            'MetodoPagoID' => 'required|exists:metodospagos,MetodoPagoID',
            'FechaDeVenta' => 'required|date',
            'TotalConDescuento' => 'required|numeric'
        ]);

        $venta->update([
            'id_cliente' => $request->id_cliente,
            'id_empleado' => $request->id_empleado,
            'MetodoPagoID' => $request->MetodoPagoID,
            'FechaDeVenta' => $request->FechaDeVenta,
            'TotalConDescuento' => $request->TotalConDescuento
        ]);

        return redirect()->route('venta.index')->with('success', 'Venta actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route('venta.index')->with('success', 'Venta eliminada correctamente');
    }
}
