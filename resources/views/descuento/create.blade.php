@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Encabezado con estilo combinado -->
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <h1 class="display-6 fw-bold">Agregar Tipo de Descuento</h1>
                <a href="{{ route('descuento.index') }}" class="btn btn-light">Regresar</a>
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
                <form action="{{ route('descuento.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="TipoDescuento" class="form-label">Tipo de Descuento</label>
                        <input type="text" class="form-control" id="TipoDescuento" name="TipoDescuento" required>
                    </div>
                    <div class="mb-3">
                        <label for="MontoDescuento" class="form-label">Monto de Descuento</label>
                        <input type="text" class="form-control" id="MontoDescuento" name="MontoDescuento" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
