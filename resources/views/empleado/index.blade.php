@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2">
                <h1 class="display-6 fw-bold">Empleados</h1>
                <p class="fs-5">Gestiona la información de los empleados en el sistema.</p>
                <a href="{{ route('empleado.create') }}" class="btn btn-light">Agregar Empleado</a>
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

        <!-- Accordion para listar empleados -->
        <div class="accordion" id="empleadosAccordion">
            @foreach($empleados as $empleado)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $empleado->id_empleado }}">
                        <button class="accordion-button collapsed bg-light text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $empleado->id_empleado }}" aria-expanded="false" aria-controls="collapse{{ $empleado->id_empleado }}">
                            {{ $loop->index + 1 }} -
                            @if($empleado->persona)
                                {{ $empleado->persona->Nombre }} {{ $empleado->persona->ap }} {{ $empleado->persona->am }}
                            @else
                                Sin Persona Asociada
                            @endif
                        </button>
                    </h2>
                    <div id="collapse{{ $empleado->id_empleado }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $empleado->id_empleado }}" data-bs-parent="#empleadosAccordion">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('empleado.edit', $empleado->id_empleado) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('empleado.destroy', $empleado->id_empleado) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>

                            <div class="mt-3">
                                <p><strong>Departamento:</strong> {{ $empleado->departamento ?? 'N/A' }}</p>
                                <p><strong>Salario:</strong> ${{ number_format($empleado->salario, 2) }}</p>
                                <p><strong>Fecha de Contratación:</strong> {{ $empleado->fechaContratacion ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
