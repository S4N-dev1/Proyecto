@extends('layouts.side')

@section('content')
    <div class="container my-5">
        <div class="p-3 mb-3 bg-primary text-white rounded-3">
            <div class="container-fluid py-2">
                <h1 class="display-6 fw-bold">Productos</h1>
                <p class="fs-5">Gestiona la información de los productos en el sistema.</p>
                <a href="{{ route('producto.create') }}" class="btn btn-light">Agregar Producto</a>
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

        <!-- Accordion para listar productos -->
        <div class="accordion" id="productosAccordion">
            @foreach($productos as $producto)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $producto->id_producto }}">
                        <button class="accordion-button collapsed bg-light text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $producto->id_producto }}" aria-expanded="false" aria-controls="collapse{{ $producto->id_producto }}">
                            {{ $loop->index + 1 }} -
                            {{ $producto->nombre }}
                            @if($producto->provedor)
                                - {{ $producto->provedor->persona->Nombre ?? 'Sin Proveedor Asociado' }}
                            @else
                                - Sin Proveedor Asociado
                            @endif
                        </button>
                    </h2>
                    <div id="collapse{{ $producto->id_producto }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $producto->id_producto }}" data-bs-parent="#productosAccordion">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('producto.edit', $producto->id_producto) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('producto.destroy', $producto->id_producto) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>

                            <div class="mt-3">
                                <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
                                <p><strong>Código de Barras:</strong> {{ $producto->codigobarras }}</p>
                                <p><strong>Descripción:</strong> {{ $producto->descripcion ?? 'Sin Descripción' }}</p>
                                <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
                                <p><strong>Existencias:</strong> {{ $producto->existencias }}</p>
                                <p><strong>Proveedor:</strong>
                                    @if($producto->provedor)
                                        {{ $producto->provedor->persona->Nombre ?? 'Sin Proveedor Asociado' }}
                                    @else
                                        Sin Proveedor Asociado
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
