@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <h1 class="display-6 fw-bold">Editar Venta</h1>
                <a href="{{ route('venta.index') }}" class="btn btn-light">Regresar</a>
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
                <form action="{{ route('venta.update', $venta) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Campo de selección de cliente -->
                    <div class="mb-3">
                        <label for="id_cliente" class="form-label">Cliente Asociado</label>
                        <select name="id_cliente" class="form-select" required>
                            <option value="">-- Seleccionar Cliente --</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id_cliente }}" {{ $venta->id_cliente == $cliente->id_cliente ? 'selected' : '' }}>
                                    {{ $cliente->persona->Nombre ?? 'Sin Cliente' }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Campo de selección de empleado -->
                    <div class="mb-3">
                        <label for="id_empleado" class="form-label">Empleado Responsable</label>
                        <select name="id_empleado" class="form-select" required>
                            <option value="">-- Seleccionar Empleado --</option>
                            @foreach ($empleados as $empleado)
                                <option value="{{ $empleado->id_empleado }}" {{ $venta->id_empleado == $empleado->id_empleado ? 'selected' : '' }}>
                                    {{ $empleado->persona->Nombre ?? 'Sin Empleado' }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Campo de selección de método de pago -->
                    <div class="mb-3">
                        <label for="MetodoPagoID" class="form-label">Método de Pago</label>
                        <select name="MetodoPagoID" class="form-select" required>
                            <option value="">-- Seleccionar Método de Pago --</option>
                            @foreach ($metodosPago as $metodo)
                                <option value="{{ $metodo->MetodoPagoID }}" {{ $venta->MetodoPagoID == $metodo->MetodoPagoID ? 'selected' : '' }}>
                                    {{ $metodo->NombreMetods }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Campo de fecha de venta -->
                    <div class="mb-3">
                        <label for="FechaDeVenta" class="form-label">Fecha de Venta</label>
                        <input type="date" class="form-control" id="FechaDeVenta" name="FechaDeVenta" value="{{ $venta->FechaDeVenta }}" required>
                    </div>

                    <!-- Campo de total con descuento -->
                    <div class="mb-3">
                        <label for="TotalConDescuento" class="form-label">Total con Descuento</label>
                        <input type="number" step="0.01" class="form-control" id="TotalConDescuento" name="TotalConDescuento" value="{{ $venta->TotalConDescuento }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar Venta</button>
                </form>
            </div>
        </div>
    </div>
@endsection
