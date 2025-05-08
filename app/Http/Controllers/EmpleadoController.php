<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Persona;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::with('persona')->get();
        return view('empleado.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = Persona::all();
        return view('empleado.create', compact('personas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => 'required|exists:personas,id_personas',
            'departamento' => 'required|string|max:50',
            'salario' => 'required|numeric',
            'fechaContratacion' => 'required|date'
        ]);

        Empleado::create([
            'id_persona' => $request->id_persona,
            'departamento' => $request->departamento,
            'salario' => $request->salario,
            'fechaContratacion' => $request->fechaContratacion,
        ]);

        return redirect()->route('empleado.index')->with('success', 'Empleado agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        $personas = Persona::all();
        return view('empleado.edit', compact('empleado', 'personas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'id_persona' => 'required|exists:personas,id_personas',
            'departamento' => 'required|string|max:50',
            'salario' => 'required|numeric',
            'fechaContratacion' => 'required|date'
        ]);

        $empleado->update([
            'id_persona' => $request->id_persona,
            'departamento' => $request->departamento,
            'salario' => $request->salario,
            'fechaContratacion' => $request->fechaContratacion,
        ]);

        return redirect()->route('empleado.index')->with('success', 'Empleado actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleado.index')->with('success', 'Empleado eliminado correctamente');
    }
}
