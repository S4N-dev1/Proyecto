@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <!-- Encabezado con estilo combinado -->
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <h1 class="display-6 fw-bold">Editar Persona</h1>
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
                <form action="{{ route('persona.update', $persona->id_personas) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre de la Persona</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $persona->Nombre }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="ap" class="form-label">Apellido Paterno</label>
                        <input type="text" class="form-control" id="ap" name="ap" value="{{ $persona->ap }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="am" class="form-label">Apellido Materno</label>
                        <input type="text" class="form-control" id="am" name="am" value="{{ $persona->am }}" required>
                    </div>

                    <!-- Mostrar Foto Actual -->
                    @if ($persona->foto)
                        <div class="mb-3 text-center">
                            <label class="form-label">Foto Actual:</label>
                            <br>
                            <img src="{{ asset('storage/' . $persona->foto) }}" alt="Foto" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                        </div>
                    @endif

                    <!-- Campo para Cargar Nueva Foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Cambiar Foto (opcional)</label>
                        <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
