@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Editar persona</h1>
            <a href="{{route('metodospago.index')}}" class="btn btn-primary">Regresar</a>
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
            <form action="{{ route('metodospago.update', $metodospago->MetodoPagoID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="NombreMetods" class="form-label">Nombre del metodo</label>
                    <input type="text" class="form-control" id="NombreMetods" name="NombreMetods" value="{{ $metodospago->NombreMetods }}" required>
                    <label for="Descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="{{ $metodospago->Descripcion }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
