<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Provedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra una lista de los productos.
     */
    public function index()
    {
        $productos = Producto::with('provedor')->get();

        return view('producto.index', compact('productos'));
    }
}
