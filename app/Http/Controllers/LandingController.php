<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class LandingController extends Controller
{
    public function index()
    {
        $productos = Producto::latest()->take(6)->get(); // o los más vendidos
        return view('ABPLANDING', compact('productos'));
    }
}

