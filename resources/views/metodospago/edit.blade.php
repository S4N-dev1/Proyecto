@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Encabezado con estilo combinado -->
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <h1 class="display-6 fw-bold">Editar Método de Pago</h1>
                <a href="{{ route('metodospago.index') }}" class="btn btn-light">Regresar</a>
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
                <form action="{{ route('metodospago.update', $metodospago->MetodoPagoID) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="NombreMetods" class="form-label">Nombre del Método</label>
                        <input type="text" class="form-control" id="NombreMetods" name="NombreMetods" value="{{ $metodospago->NombreMetods }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="Descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="{{ $metodospago->Descripcion }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
