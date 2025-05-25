@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <!-- Encabezado con estilo similar -->
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2">
                <h1 class="display-6 fw-bold">Métodos de Pago</h1>
                <p class="fs-5">Administra los métodos de pago disponibles en el sistema.</p>
                <a href="{{ route('metodospago.create') }}" class="btn btn-light">Agregar Método de Pago</a>
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

        <!-- Accordion para listar métodos de pago -->
        <div class="accordion" id="metodosAccordion">
            @foreach($metodospagos as $metodospago)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $metodospago->MetodoPagoID }}">
                        <button class="accordion-button collapsed bg-light text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $metodospago->MetodoPagoID }}" aria-expanded="false" aria-controls="collapse{{ $metodospago->MetodoPagoID }}">
                            {{ $loop->index + 1 }} - {{ $metodospago->NombreMetods }}
                        </button>
                    </h2>
                    <div id="collapse{{ $metodospago->MetodoPagoID }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $metodospago->MetodoPagoID }}" data-bs-parent="#metodosAccordion">
                        <div class="accordion-body">
                            <p><strong>Descripción:</strong> {{ $metodospago->Descripcion }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('metodospago.edit', $metodospago->MetodoPagoID) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('metodospago.destroy', $metodospago->MetodoPagoID) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
