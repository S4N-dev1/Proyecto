@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <h1 class="display-6 fw-bold">Agregar Empleado</h1>
                <a href="{{ route('empleado.index') }}" class="btn btn-light">Regresar</a>
            </div>
        </div>

        <!-- Mensaje emergente de errores -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Formulario en tarjeta -->
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('empleado.store') }}" method="POST">
                    @csrf

                    <!-- Campo de selección de persona -->
                    <div class="mb-3">
                        <label for="id_persona" class="form-label">Persona Asociada</label>
                        <select name="id_persona" class="form-select" required>
                            <option value="">-- Seleccionar Persona --</option>
                            @foreach ($personas as $persona)
                                <option value="{{ $persona->id_personas }}">{{ $persona->Nombre }} {{ $persona->ap }} {{ $persona->am }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Campo de departamento -->
                    <div class="mb-3">
                        <label for="departamento" class="form-label">Departamento</label>
                        <input type="text" class="form-control" id="departamento" name="departamento" required>
                    </div>

                    <!-- Campo de salario -->
                    <div class="mb-3">
                        <label for="salario" class="form-label">Salario</label>
                        <input type="number" step="0.01" class="form-control" id="salario" name="salario" required>
                    </div>

                    <!-- Campo de fecha de contratación -->
                    <div class="mb-3">
                        <label for="fechaContratacion" class="form-label">Fecha de Contratación</label>
                        <input type="date" class="form-control" id="fechaContratacion" name="fechaContratacion" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
