@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2">
                <h1 class="display-6 fw-bold">Ventas</h1>
                <p class="fs-5">Gestiona la información de las ventas registradas en el sistema.</p>
                <a href="{{ route('venta.create') }}" class="btn btn-light">Registrar Venta</a>
                <a href="{{ url('ABPDASH') }}" class="btn btn-light">Regresar</a>
            </div>
        </div>

        <!-- Mensaje emergente de éxito -->
        @if(session('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Accordion para listar ventas -->
        <div class="accordion" id="ventasAccordion">
            @foreach($ventas as $venta)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $venta->id_venta }}">
                        <button class="accordion-button collapsed bg-light text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $venta->id_venta }}" aria-expanded="false" aria-controls="collapse{{ $venta->id_venta }}">
                            {{ $loop->index + 1 }} -
                            Venta #{{ $venta->id_venta }} -
                            Fecha: {{ $venta->FechaDeVenta }} -
                            Total: ${{ number_format($venta->TotalConDescuento, 2) }}
                        </button>
                    </h2>
                    <div id="collapse{{ $venta->id_venta }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $venta->id_venta }}" data-bs-parent="#ventasAccordion">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('venta.edit', $venta->id_venta) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('venta.destroy', $venta->id_venta) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>

                            <div class="mt-3">
                                <p><strong>Cliente:</strong>
                                    @if($venta->cliente)
                                        {{ $venta->cliente->persona->Nombre ?? 'Sin Cliente Asociado' }}
                                    @else
                                        Sin Cliente Asociado
                                    @endif
                                </p>
                                <p><strong>Empleado:</strong>
                                    @if($venta->empleado)
                                        {{ $venta->empleado->persona->Nombre ?? 'Sin Empleado Asociado' }}
                                    @else
                                        Sin Empleado Asociado
                                    @endif
                                </p>
                                <p><strong>Método de Pago:</strong>
                                    @if($venta->metodoPago)
                                        {{ $venta->metodoPago->NombreMetods }}
                                    @else
                                        Sin Método de Pago Asociado
                                    @endif
                                </p>
                                <p><strong>Fecha de Venta:</strong> {{ $venta->FechaDeVenta }}</p>
                                <p><strong>Total con Descuento:</strong> ${{ number_format($venta->TotalConDescuento, 2) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
