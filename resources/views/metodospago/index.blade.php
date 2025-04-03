@extends("layouts.app")

@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Metodos de pago</h1>
            <a href="{{route('metodospago.create')}}" class="btn btn-success">Agregar un metodo de pago</a>
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
                    <th>Nombre del metodo</th>
                    <th>Descripcion del metodo</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($metodospagos as $metodospago)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{ $metodospago->NombreMetods }}</td>
                        <td>{{ $metodospago->Descripcion }}</td>


                        <td>
                            <a class="btn btn-warning" href="{{ route('metodospago.edit', $metodospago->MetodoPagoID) }}">Editar</a>
                            <form action="{{ route('metodospago.destroy', $metodospago->MetodoPagoID) }}" method="POST" style="display:inline;">
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
