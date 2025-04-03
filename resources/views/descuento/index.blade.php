@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-primary">Tipos de descuentos</h1>
            <a href="{{ route('descuento.create') }}" class="btn btn-primary">Agregar un tipo de descuento</a>
        </div>
    </div>

    @if(session('success'))
        <div class="row justify-content-center">
            <div class="col-4">
                <p class="alert alert-primary">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="row justify-content-center mt-5">
        @foreach($descuentos as $descuento)
            <div class="col-md-4 mb-4">
                <div class="card" style="background-color: #e3f2fd;">
                    <div class="card-header">
                        <h5 class="card-title">{{ $descuento->TipoDescuento }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Monto de descuento: {{ $descuento->MontoDescuento }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('descuento.edit', $descuento->DescuentoID) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('descuento.destroy', $descuento->DescuentoID) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary btn-sm" type="submit">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
