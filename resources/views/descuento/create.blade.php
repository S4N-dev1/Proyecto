@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Agregar Tipo de descuento</h1>
            <a href="{{route('descuento.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('descuento.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="TipoDescuento" class="form-label">Tipo de descuento</label>
                    <input type="text" class="form-control" id="TipoDescuento" name="TipoDescuento" required>
                    <label for="MontoDescuento" class="form-label">Monto de descuento</label>
                    <input type="text" class="form-control" id="MontoDescuento" name="MontoDescuento" required>

                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
