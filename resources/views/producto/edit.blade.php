@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <h1 class="display-6 fw-bold">Editar Producto</h1>
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
                <form action="{{ route('producto.update', $producto->id_producto) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Campo de selección de proveedor -->
                    <div class="mb-3">
                        <label for="id_provedor" class="form-label">Proveedor Asociado</label>
                        <select name="id_provedor" class="form-select" required>
                            <option value="">-- Seleccionar Proveedor --</option>
                            @foreach ($provedores as $provedor)
                                <option value="{{ $provedor->id_provedor }}"
                                    {{ $producto->id_provedor == $provedor->id_provedor ? 'selected' : '' }}>
                                    {{ $provedor->persona->Nombre ?? 'Sin Proveedor' }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Campo de nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                               value="{{ $producto->nombre }}" required>
                    </div>

                    <!-- Campo de código de barras -->
                    <div class="mb-3">
                        <label for="codigobarras" class="form-label">Código de Barras</label>
                        <input type="text" class="form-control" id="codigobarras" name="codigobarras"
                               value="{{ $producto->codigobarras }}" required>
                    </div>

                    <!-- Campo de descripción -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $producto->descripcion }}</textarea>
                    </div>

                    <!-- Campo de precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="precio" name="precio"
                               value="{{ $producto->precio }}" required>
                    </div>

                    <!-- Campo de existencias -->
                    <div class="mb-3">
                        <label for="existencias" class="form-label">Existencias</label>
                        <input type="number" class="form-control" id="existencias" name="existencias"
                               value="{{ $producto->existencias }}" required>
                    </div>

                    <!-- Campo de foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto del Producto</label>
                        <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                    </div>

                    <!-- Mostrar foto actual -->
                    @if($producto->foto)
                        <div class="mb-3 text-center">
                            <p class="text-muted">Foto actual:</p>
                            <img src="{{ $producto->foto_url }}" alt="Foto actual" class="img-thumbnail" style="max-height: 200px;">
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
