@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <nav class="navbar shadow px-3" style="background-color: #0d6efd;">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="dropdown">
                <a class="navbar-brand dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="bi bi-feather"></i> Pluma y Papel
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('ABPDASH') }}"><i class="bi bi-file-earmark"></i> DASH</a></li>
                    <li><a class="dropdown-item" href="#">Opción 2</a></li>
                    <li><a class="dropdown-item" href="#">Opción 3</a></li>
                </ul>
            </div>

            <ul class="navbar-nav flex-row">
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ url('ABPLANDING') }}" style="color: white; margin-right: 10px;">Inicio</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ url('ABPLANDING') }}" style="color: white; margin-right: 10px;">Productos</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ route('metodospago.index') }}" style="color: white; margin-right: 10px;">Métodos de Pago</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ url('ABPLANDING') }}" style="color: white; margin-right: 10px;">Contacto</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ url('ABPLANDING') }}" style="color: white; margin-right: 10px;">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="hero" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('imgenes/pencil4.png') }}') center center / cover no-repeat; height: 85vh; display: flex; align-items: center; justify-content: center; color: white; text-align: center;">
        <div class="container">
            <h1 class="display-4 fw-bold">Inspira tus ideas</h1>
            <p class="lead">Papelería, creatividad y calidad en un solo lugar.</p>
            <a href="{{ url('ABPLANDING') }}" class="btn btn-warning btn-lg mt-3">Descubre nuestros productos</a>
        </div>
    </section>

    <section class="container py-5">
        <h2 class="text-center" style="font-weight: bold; margin-bottom: 30px;">Más Vendidos</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imgenes/colors1.jpeg') }}" class="card-img-top" alt="Colores" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Colores</h5>
                        <p class="card-text">Perfectos para dar vida a tus ideas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imgenes/tinta1.jpeg') }}" class="card-img-top" alt="Tinta" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tinta para impresora</h5>
                        <p class="card-text">Nitidez y calidad en cada impresión.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imgenes/Boli1.jpeg') }}" class="card-img-top" alt="Bolígrafos" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bolígrafos</h5>
                        <p class="card-text">Escribe con estilo y comodidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imgenes/lapiceros.jpg') }}" class="card-img-top" alt="Lapiceros" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">lapiceros</h5>
                        <p class="card-text">Perfectos para tus ideas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imgenes/libretas.png') }}" class="card-img-top" alt="libretas" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Libreta</h5>
                        <p class="card-text">La mejor libreta en tus manos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imgenes/colores.png') }}" class="card-img-top" alt="colorss" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Colores</h5>
                        <p class="card-text">Dale  mas vida a tus ideas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imgenes/trans.jpg') }}" class="card-img-top" alt="trans" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Transbordador</h5>
                        <p class="card-text">Mide con precision.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imgenes/tijeras.jpg') }}" class="card-img-top" alt="tijeras" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tijeras</h5>
                        <p class="card-text">Corta con estilo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imgenes/postis.png') }}" class="card-img-top" alt="postis" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Postics</h5>
                        <p class="card-text">Decora tu estilo.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ url('ABPLANDING') }}" class="btn btn-primary btn-lg">Ver todos los productos</a>
        </div>
    </section>

    <section class="bg-light py-5 text-center">
        <div class="container">
            <h2 style="font-weight: bold; margin-bottom: 30px;">Nuestros clientes opinan</h2>
            <blockquote class="blockquote">
                <p>"Productos de excelente calidad. ¡Recomendado al 100%!"</p>
            </blockquote>
        </div>
    </section>

    <section class="container text-center py-5">
        <h3 class="fw-bold">Tu creatividad merece las mejores herramientas</h3>
        <p class="fs-5">Transforma cada página en una obra de arte con Pluma y Papel.</p>
    </section>

    <section class="bg-primary text-white text-center py-5">
        <div class="container">
            <h3 class="mb-3">¿Listo para comenzar?</h3>
            <a href="{{ url('ABPLANDING') }}" class="btn btn-outline-light btn-lg">Explorar productos</a>
        </div>
    </section>
@endsection
