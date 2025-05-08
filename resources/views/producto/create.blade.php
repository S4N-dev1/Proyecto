@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <h1 class="display-6 fw-bold">Agregar Producto</h1>
                <a href="{{ route('producto.index') }}" class="btn btn-light">Regresar</a>
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
                <form action="{{ route('producto.store') }}" method="POST">
                    @csrf

                    <!-- Campo de selección de proveedor -->
                    <div class="mb-3">
                        <label for="id_provedor" class="form-label">Proveedor Asociado</label>
                        <select name="id_provedor" class="form-select" required>
                            <option value="">-- Seleccionar Proveedor --</option>
                            @foreach ($provedores as $provedor)
                                <option value="{{ $provedor->id_provedor }}">
                                    {{ $provedor->persona->Nombre ?? 'Sin Proveedor' }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Campo de nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <!-- Campo de código de barras -->
                    <div class="mb-3">
                        <label for="codigobarras" class="form-label">Código de Barras</label>
                        <input type="text" class="form-control" id="codigobarras" name="codigobarras" required>
                    </div>

                    <!-- Campo de descripción -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                    </div>

                    <!-- Campo de precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                    </div>

                    <!-- Campo de existencias -->
                    <div class="mb-3">
                        <label for="existencias" class="form-label">Existencias</label>
                        <input type="number" class="form-control" id="existencias" name="existencias" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar Producto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
