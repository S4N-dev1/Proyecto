@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2">
                <h1 class="display-6 fw-bold">Clientes</h1>
                <p class="fs-5">Gestiona la información de los clientes en el sistema.</p>
                <a href="{{ route('cliente.create') }}" class="btn btn-light">Agregar cliente</a>
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

        <!-- Accordion para listar clientes -->
        <div class="accordion" id="clientesAccordion">
            @foreach($clientes as $cliente)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $cliente->id_cliente }}">
                        <button class="accordion-button collapsed bg-light text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $cliente->id_cliente }}" aria-expanded="false" aria-controls="collapse{{ $cliente->id_cliente }}">
                            {{ $loop->index + 1 }} -
                            @if($cliente->persona)
                                {{ $cliente->persona->Nombre }} {{ $cliente->persona->ap }} {{ $cliente->persona->am }}
                            @else
                                Sin Persona Asociada
                            @endif
                        </button>
                    </h2>
                    <div id="collapse{{ $cliente->id_cliente }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $cliente->id_cliente }}" data-bs-parent="#clientesAccordion">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('cliente.edit', $cliente->id_cliente) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('cliente.destroy', $cliente->id_cliente) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                            <div class="mt-3">
                                <p><strong>Nombre:</strong> {{ $cliente->persona->Nombre ?? 'N/A' }}</p>
                                <p><strong>Apellido Paterno:</strong> {{ $cliente->persona->ap ?? 'N/A' }}</p>
                                <p><strong>Apellido Materno:</strong> {{ $cliente->persona->am ?? 'N/A' }}</p>
                                <p><strong>Foto:</strong></p>
                                @if($cliente->persona && $cliente->persona->foto)
                                    <img src="{{ asset('storage/' . $cliente->persona->foto) }}" alt="Foto de {{ $cliente->persona->Nombre }}" class="img-thumbnail" style="width: 150px; height: 150px;">
                                @else
                                    <p>No hay foto disponible.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
