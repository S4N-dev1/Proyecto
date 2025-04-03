@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Encabezado modificado para ocupar menos espacio -->
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2">
                <h1 class="display-6 fw-bold">Tipos de Descuentos</h1>
                <p class="fs-5">Gestiona y revisa todos los descuentos disponibles en el sistema.</p>
                <a href="{{ route('descuento.create') }}" class="btn btn-light">Agregar Descuento</a>
            </div>
        </div>

        <!-- Mensaje emergente de éxito -->
        @if(session('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Accordion para listar descuentos -->
        <div class="accordion" id="descuentosAccordion">
            @foreach($descuentos as $descuento)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $descuento->DescuentoID }}">
                        <button class="accordion-button collapsed bg-light text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $descuento->DescuentoID }}" aria-expanded="false" aria-controls="collapse{{ $descuento->DescuentoID }}">
                            {{ $descuento->TipoDescuento }} – Monto: {{ $descuento->MontoDescuento }}
                        </button>
                    </h2>
                    <div id="collapse{{ $descuento->DescuentoID }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $descuento->DescuentoID }}" data-bs-parent="#descuentosAccordion">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('descuento.edit', $descuento->DescuentoID) }}" class="btn btn-primary btn-sm me-2">Editar</a>
                                <form action="{{ route('descuento.destroy', $descuento->DescuentoID) }}" method="POST" class="d-inline">
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
