<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Venta;
use App\Models\cliente;
use App\Models\empleado;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //  gráfica de barras
        $productos = Producto::orderByDesc('existencias')->take(3)->get(['nombre', 'existencias']);
        $labels = $productos->pluck('nombre');
        $data = $productos->pluck('existencias');

        // gráfica Donut
        $ventasRealizadas = Venta::count();
        $total = 100;
        $ventasPendientes = max(0, $total - $ventasRealizadas);

        // clientes
        $totalClientes = Cliente::count();
        //ventas
        $ventasRealizadas = Venta::count();
        // empleados
        $totalempleados = empleado::count();

        return view('abpdash', compact(
            'labels',
            'data',
            'ventasRealizadas',
            'ventasPendientes',
            'totalClientes',
            'totalempleados'
        ));
    }

}

