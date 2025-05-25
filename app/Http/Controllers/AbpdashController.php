<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class AbpdashController extends Controller
{
    /**
     * Muestra el dashboard.
     */
    public function index()
    {
        $productos = Producto::orderByDesc('existencias')
            ->take(3)
            ->get(['nombre', 'existencias']);

        $labels = $productos->pluck('nombre');
        $data = $productos->pluck('existencias');

        return view('abpdash.index', compact('labels', 'data'));
    }

}
