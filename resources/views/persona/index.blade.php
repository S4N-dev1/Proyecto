@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Encabezado modificado para ocupar menos espacio y con paleta de colores azul -->
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2">
                <h1 class="display-6 fw-bold">Personas</h1>
                <p class="fs-5">Gestiona la información de las personas en el sistema.</p>
                <a href="{{ route('persona.create') }}" class="btn btn-light">Agregar Persona</a>
            </div>
        </div>

        <!-- Mensaje emergente de éxito -->
        @if(session('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Accordion para listar personas -->
        <div class="accordion" id="personasAccordion">
            @foreach($personas as $persona)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $persona->id_personas }}">
                        <button class="accordion-button collapsed bg-light text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $persona->id_personas }}" aria-expanded="false" aria-controls="collapse{{ $persona->id_personas }}">
                            {{ $loop->index + 1 }} - {{ $persona->Nombre }} {{ $persona->ap }} {{ $persona->am }}
                        </button>
                    </h2>
                    <div id="collapse{{ $persona->id_personas }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $persona->id_personas }}" data-bs-parent="#personasAccordion">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('persona.edit', $persona->id_personas) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('persona.destroy', $persona->id_personas) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                            <div class="mt-3">
                                <p><strong>Nombre:</strong> {{ $persona->Nombre }}</p>
                                <p><strong>Apellido Paterno:</strong> {{ $persona->ap }}</p>
                                <p><strong>Apellido Materno:</strong> {{ $persona->am }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
