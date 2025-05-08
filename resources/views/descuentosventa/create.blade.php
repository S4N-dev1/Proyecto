@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <h1 class="display-6 fw-bold">Registrar Descuento en Venta</h1>
                <a href="{{ route('descuentosventa.index') }}" class="btn btn-light">Regresar</a>
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
                <form action="{{ route('descuentosventa.store') }}" method="POST">
                    @csrf

                    <!-- Campo de selección de venta -->
                    <div class="mb-3">
                        <label for="id_venta" class="form-label">Venta Asociada</label>
                        <select name="id_venta" class="form-select" required>
                            <option value="">-- Seleccionar Venta --</option>
                            @foreach ($ventas as $venta)
                                <option value="{{ $venta->id_venta }}">
                                    Venta #{{ $venta->id_venta }} - Fecha: {{ $venta->FechaDeVenta }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Campo de selección de descuento -->
                    <div class="mb-3">
                        <label for="DescuentoID" class="form-label">Descuento Aplicado</label>
                        <select name="DescuentoID" class="form-select" required>
                            <option value="">-- Seleccionar Descuento --</option>
                            @foreach ($descuentos as $descuento)
                                <option value="{{ $descuento->DescuentoID }}">
                                    {{ $descuento->TipoDescuento }} - {{ $descuento->MontoDescuento }}%
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar Descuento</button>
                </form>
            </div>
        </div>
    </div>
@endsection
