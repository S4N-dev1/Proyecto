@extends('layouts.app')

@section('content')
    <h2>Editar Persona</h2>
    <form method='POST' action="{ route('persona.update', $item->id) }">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre', $item->Nombre ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="Apellido_Paterno" class="form-label">Apellido Paterno</label>
            <input type="text" name="Apellido_Paterno" id="Apellido_Paterno" class="form-control" value="{{ old('Apellido_Paterno', $item->Apellido_Paterno ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="Apellido_Materno" class="form-label">Apellido Materno</label>
            <input type="text" name="Apellido_Materno" id="Apellido_Materno" class="form-control" value="{{ old('Apellido_Materno', $item->Apellido_Materno ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" name="Direccion" id="Direccion" class="form-control" value="{{ old('Direccion', $item->Direccion ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{ old('Telefono', $item->Telefono ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="Fecha_de_nacimiento" class="form-label">Fecha de nacimiento</label>
            <input type="date" name="Fecha_de_nacimiento" id="Fecha_de_nacimiento" class="form-control" value="{{ old('Fecha_de_nacimiento', $item->Fecha_de_nacimiento ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="CorreoElectronico" class="form-label">CorreoElectronico</label>
            <input type="email" name="CorreoElectronico" id="CorreoElectronico" class="form-control" value="{{ old('CorreoElectronico', $item->CorreoElectronico ?? '') }}" required>
        </div>
        <button class="btn btn-primary">Actualizar</button>
    </form>
@endsection
