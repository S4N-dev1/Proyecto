@extends("layouts.app")

@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Personas</h1>
            <a href="{{route('persona.create')}}" class="btn btn-success">Agregar una persona</a>
        </div>
    </div>

    @if(session('success'))
        <div class="row justify-content-center">
            <div class="col-4">
                <p class="alert alert-success">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre de la persona</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($personas as $persona)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{ $persona->Nombre }}</td>
                        <td>{{ $persona->ap }}</td>
                        <td>{{ $persona->am }}</td>

                        <td>
                            <a class="btn btn-warning" href="{{ route('persona.edit', $persona->id_personas) }}">Editar</a>
                            <form action="{{ route('persona.destroy', $persona->id_personas) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
