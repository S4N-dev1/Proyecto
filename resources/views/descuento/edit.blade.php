@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Editar Tipo de descuento</h1>
            <a href="{{route('descuento.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('descuento.update', $descuento->DescuentoID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="TipoDescuento" class="form-label">Nombre de la persona</label>
                    <input type="text" class="form-control" id="TipoDescuento" name="TipoDescuento" value="{{ $descuento->TipoDescuento }}" required>
                    <label for="MontoDescuento" class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" id="MontoDescuento" name="MontoDescuento" value="{{ $descuento->MontoDescuento }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
