@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <!-- Encabezado con estilo combinado -->
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <h1 class="display-6 fw-bold">Agregar Persona</h1>
                <a href="{{ route('persona.index') }}" class="btn btn-light">Regresar</a>
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
                <form action="{{ route('persona.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Campo de Nombre -->
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                    </div>

                    <!-- Campo de Apellido Paterno -->
                    <div class="mb-3">
                        <label for="ap" class="form-label">Apellido Paterno</label>
                        <input type="text" class="form-control" id="ap" name="ap" required>
                    </div>

                    <!-- Campo de Apellido Materno -->
                    <div class="mb-3">
                        <label for="am" class="form-label">Apellido Materno</label>
                        <input type="text" class="form-control" id="am" name="am" required>
                    </div>

                    <!-- Campo para Cargar Foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto (opcional)</label>
                        <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
