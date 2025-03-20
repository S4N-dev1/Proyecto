@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-6 mt-4 pb-0 text-secondary ">
                <div class="row border-bottom border-4 border-warning">
                    <div class="col p-4 mt-4">
                        <h1 class="text-dark">Jose Gael Barajas Gonzalez</h1>
                        <h2>Ingeniero en Sistemas Computacionales</h2>
                    </div>
                </div>
                <div class="row border-bottom border-4 border-warning">
                    <div class="col p-4 mt-2">
                        <h3>Perfil</h3>
                        <p>
                        Estudiante del tecnologico de estudios superiores de valle de bravo, estudiante de la carrera de ingenieria en sistemas computacionales</p>

                    </div>
                </div>
            </div>
            <div class="col-6 bg bg-warning ">
                {{--asset=127.0.0.0 hacer referecia a public--}}
                <img src="{{asset("imgenes/yopelon.jpg")}}" class="rounded-circle d-block w-50 mx-auto" alt="Fotografía">
            </div>
        </div>
        <div class="row">
            <div class="col col-6 border-end border-4 border-warning p-4">
                <h2 class="p-4  pt-4">Experiencia</h2>
                <div class="row p-4  pt-4">
                    <div class="col">
                        <h4 class="">Egresado de un cecytem</h4>
                        <ul class="ps-4 ms-4 pt-3 text-secondary">
                            <li>Estudiante universiario</li>
                            <li>Egresado de un cecytem</li>
                        </ul>
                    </div>
                </div>
                <div class="row p-4 pt-4">
                    <div class="col">
                        <h4 class="">Jugador semi profecional de fortnite</h4>
                        <ul class="ps-4 ms-4 pt-3 text-secondary">
                            <li>EStudiante </li>
                            <li>Tecnico en chat gpt</li>
                        </ul>
                    </div>
                </div>
                <div class="row p-4 pt-4">
                    <div class="col">
                        <h4 class="">Aprendiz</h4>
                        <ul class="ps-4 ms-4 pt-3 text-secondary">
                            <li>Buen margen de mejora</li>
                            <li>Futuro ingeniero en sistemas computacionales</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col-6 p-4">
                <div class="row pt-4">
                    <h3>Educación</h3>
                    <div class="col-6 pt-3">
                        <h4 class="fw-bold">Tecnico en programacion</h4>
                        <h5 class="text-secondary fw-light">CECYTEM</h5>
                    </div>
                    <div class="col-6 pt-3">
                        <h4 class="fw-bold">Futuro ingeniero en sistemas </h4>
                        <h5 class="text-secondary fw-light">TESVB</h5>
                    </div>
                    <div class="col-6 pt-3">
                        <h4 class="fw-bold">Secundaria</h4>
                        <h5 class="text-secondary fw-light">Benito Juarez</h5>
                    </div>
                    <div class="col-6 pt-3">
                        <h4 class="fw-bold">Primaria</h4>
                        <h5 class="text-secondary fw-light">Guadalupe victoria</h5>
                    </div>

                </div>
                <div class="row">
                    <h3>Contacto</h3>

                    <div class="col">
                        <ul>
                            <li><span><i class="fa-solid fa-envelope"></i></span>gaelbarajas17@gmail.com</li>
                            <li>7228815321</li>
                            <li>GaelBG</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
@endsection



