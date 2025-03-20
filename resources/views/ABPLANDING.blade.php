@extends('Layouts.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .img {
            background: url('{{ asset("imgenes/pencil4.png") }}') no-repeat center center;
            background-size: cover;/* La imagen se recorta al centro de esta */
            height: 70vh; /* Hace que ocupe toda la pantalla  de izquierda a derecha  y abajo hacia arriba se selecciona el espacio a abarcar*/
            display: flex;/* Vuelve felxible la imagen para los componentes que iran dentro */
            align-items: center;/* alinea todos los componentes en el centro de la imagen*/
        }

    </style>



<!-- Apartado de todo mi parte del encabezado -->
<div class=" bg-custom-color-A8 text-left text-custom-color-A1 shadow mx-0 p-0 mt-0">
    <h5 class="p-2"><a href="{{url('ABPDASH')}}" class="btn text-decoration-none {{request()->routeIs('ABPDASH')?'active_custom':''}} text-white"><i class="bi bi-file"></i> DASH</a></h5>
</div>
<div class="img">

    <div class="container text-center">
        <h1 class="text-custom-color-A8">Pluma y Papel</h1>
        <h2 class="text-custom-color-A7">Productos de calidad</h2>
        <p class="lead mt-3 text-custom-color-A6">Los mejores productos del mercado.</p>
        <div class=" bg-custom-color-A2 text-center shadow mx-5 p-3 mt-5">
            <h3>¡Únete ahora!</h3>
            <button class="btn btn-dark">Registrarse</button>
        </div>
    </div>
</div>
<div class="bg-custom-color-blue ">
<!-- Apartado de toda mi parte de los beneficios -->
<section class="container mt-5 ">
    <div class="row text-center "> <h1>Productos mas vendidos</h1>
        <div class="col-md-4 text-center ">
            <h4 class="pr-5">Colores</h4>
                <p class="px-5 shadow bg-light"><img src="{{asset("imgenes/colors1.jpeg")}}" class="rounded-5 mx-0 d-block " width="300"  height="300" alt="Fotografia"></p>
        </div>
        <div class="col-md-4 text-center">
            <h4 class="pr-5">Tinta de impresora</h4>
            <p class="px-5 shadow bg-light"><img src="{{asset("imgenes/tinta1.jpeg")}}" class="rounded-5 mx-0 d-block " width="300"  height="300" alt="Fotografia"></p>
        </div>
        <div class="col-md-4 text-center">
            <h4 class="pr-5">Bolígrafos</h4>
            <p class="px-5 shadow bg-light"><img src="{{asset("imgenes/Boli1.jpeg")}}" class="rounded-5 mx-0 d-block " width="300"  height="300" alt="Fotografia"></p>
        </div>
    </div>
</section>
</div>
<!-- Apartado de calificaciones -->
<div class="container mt-5">
    <h3 class="text-center">Lo que dicen de nuestros productos</h3>
    <p class="text-center">"De la mejor calidad"</p>
</div>

<!-- Apartado de convencimiento  -->
<div class="container mt-5 text-center">
    <h3>Tu creatividad en papel, tus ideas sin límites</h3>
    <p>Desde lo más simple hasta lo más creativo, tenemos todo lo que necesitas para plasmar tus ideas. ¡Haz que cada hoja cuente!.</p>
</div>

<!--Apartado de incitacion final -->
<div class="container mt-5 text-center">
    <div class="bg-custom-color-A2 p-3 shadow text-center">
        <h3>¡No esperes más!</h3>
        <button class="btn btn-dark">Mirar productos</button>
    </div>
</div>


@endsection
