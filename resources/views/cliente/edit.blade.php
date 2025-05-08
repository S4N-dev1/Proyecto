@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <!-- Encabezado con estilo combinado -->
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <h1 class="display-6 fw-bold">Editar Cliente</h1>
                <a href="{{ route('cliente.index') }}" class="btn btn-light">Regresar</a>
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
                <form action="{{ route('cliente.update', $cliente->id_cliente) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="id_persona" class="form-label">Persona Asociada</label>
                        <select name="id_persona" class="form-select" required>
                            <option value="">-- Seleccionar Persona --</option>
                            @foreach ($personas as $persona)
                                <option value="{{ $persona->id_personas }}"
                                    {{ $persona->id_personas == $cliente->id_persona ? 'selected' : '' }}>
                                    {{ $persona->Nombre }} {{ $persona->ap }} {{ $persona->am }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
