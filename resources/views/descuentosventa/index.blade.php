@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2">
                <h1 class="display-6 fw-bold">Descuentos por Venta</h1>
                <p class="fs-5">Gestiona los descuentos aplicados a cada venta en el sistema.</p>
                <a href="{{ route('descuentosventa.create') }}" class="btn btn-light">Registrar Descuento en Venta</a>
                <a href="{{ url('home') }}" class="btn btn-light">Regresar</a>
            </div>
        </div>

        <!-- Mensaje emergente de éxito -->
        @if(session('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Accordion para listar descuentos por venta -->
        <div class="accordion" id="descuentosVentaAccordion">
            @foreach($descuentosventas as $descuentoVenta)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $descuentoVenta->id_descuentoventa }}">
                        <button class="accordion-button collapsed bg-light text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $descuentoVenta->id_descuentoventa }}" aria-expanded="false" aria-controls="collapse{{ $descuentoVenta->id_descuentoventa }}">
                            {{ $loop->index + 1 }} -
                            Venta #{{ $descuentoVenta->venta->id_venta ?? 'Sin Venta Asociada' }} -
                            Descuento: {{ $descuentoVenta->descuento->TipoDescuento ?? 'Sin Descuento' }}
                        </button>
                    </h2>
                    <div id="collapse{{ $descuentoVenta->id_descuentoventa }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $descuentoVenta->id_descuentoventa }}" data-bs-parent="#descuentosVentaAccordion">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('descuentosventa.edit', $descuentoVenta) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('descuentosventa.destroy', $descuentoVenta) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>

                            <div class="mt-3">
                                <p><strong>Venta Asociada:</strong>
                                    @if($descuentoVenta->venta)
                                        Venta #{{ $descuentoVenta->venta->id_venta }} - Fecha: {{ $descuentoVenta->venta->FechaDeVenta }}
                                    @else
                                        Sin Venta Asociada
                                    @endif
                                </p>
                                <p><strong>Descuento Aplicado:</strong>
                                    @if($descuentoVenta->descuento)
                                        {{ $descuentoVenta->descuento->TipoDescuento }} - {{ $descuentoVenta->descuento->MontoDescuento }}%
                                    @else
                                        Sin Descuento Asociado
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
