@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Agregar Metodo de pago</h1>
            <a href="{{route('metodospago.index')}}" class="btn btn-primary">Regresar</a>
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
            <form action="{{ route('metodospago.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="NombreMetods" class="form-label">Nombre del Metodo</label>
                    <input type="text" class="form-control" id="NombreMetods" name="NombreMetods" required>
                    <label for="Descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" id="Descripcion" name="Descripcion" required>

                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
