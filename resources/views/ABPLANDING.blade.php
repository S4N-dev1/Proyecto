@extends('layouts.app')

@section('content')
    {{-- Bootstrap & Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Navbar --}}
    <nav class="navbar shadow px-3" style="background-color: #0d6efd;">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="dropdown">
                <a class="navbar-brand dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="bi bi-feather"></i> Pluma y Papel
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('home') }}"><i class="bi bi-file-earmark"></i> DASH</a></li>
                </ul>
            </div>
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-2"><a class="nav-link text-white" href="{{ url('ABPLANDING') }}">Inicio</a></li>
                <li class="nav-item me-2"><a class="nav-link text-white" href="{{ url('ABPLANDING') }}">Productos</a></li>
                <li class="nav-item me-2"><a class="nav-link text-white" href="{{ route('metodospago.index') }}">Métodos de Pago</a></li>
                <li class="nav-item me-2"><a class="nav-link text-white" href="{{ url('contacto.index') }}">Contacto</a></li>
                <li class="nav-item me-2"><a class="nav-link text-white" href="{{ url('ABPLANDING') }}">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="hero" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('imgenes/pencil4.png') }}') center/cover no-repeat; height: 85vh; display: flex; align-items: center; justify-content: center; color: white; text-align: center;">
        <div class="container">
            <h1 class="display-4 fw-bold">Inspira tus ideas</h1>
            <p class="lead">Papelería, creatividad y calidad en un solo lugar.</p>
            <a href="{{ url('ABPLANDING') }}" class="btn btn-warning btn-lg mt-3">Descubre nuestros productos</a>
        </div>
    </section>

    {{-- Más Vendidos --}}
    <section class="container py-5">
        <h2 class="text-center fw-bold mb-4">Más Vendidos</h2>
        <div class="row g-4">

            @php
                $productos = [
                    ['img' => 'colors1.jpeg', 'titulo' => 'Colores', 'desc' => 'Perfectos para dar vida a tus ideas.'],
                    ['img' => 'tinta1.jpeg', 'titulo' => 'Tinta para impresora', 'desc' => 'Nitidez y calidad en cada impresión.'],
                    ['img' => 'Boli1.jpeg', 'titulo' => 'Bolígrafos', 'desc' => 'Escribe con estilo y comodidad.'],
                    ['img' => 'lapiceros.jpg', 'titulo' => 'Lapiceros', 'desc' => 'Ideales para cualquier tarea.'],
                    ['img' => 'libretas.png', 'titulo' => 'Libretas', 'desc' => 'Tus ideas organizadas en un solo lugar.'],
                    ['img' => 'trans.jpg', 'titulo' => 'Transportador', 'desc' => 'Mide con precisión y claridad.'],
                    ['img' => 'tijeras.jpg', 'titulo' => 'Tijeras', 'desc' => 'Corte preciso y cómodo.'],
                    ['img' => 'postis.png', 'titulo' => 'Post-its', 'desc' => 'Notas adhesivas para cada ocasión.'],
                ];
            @endphp

            @foreach($productos as $producto)
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('imgenes/' . $producto['img']) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $producto['titulo'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $producto['titulo'] }}</h5>
                            <p class="card-text">{{ $producto['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="text-center mt-4">
            <a href="{{ url('ABPLANDING') }}" class="btn btn-primary btn-lg">Ver todos los productos</a>
        </div>
    </section>

    {{-- Opiniones --}}
    <section class="bg-light py-5 text-center">
        <div class="container">
            <h2 class="fw-bold mb-4">Nuestros clientes opinan</h2>
            <blockquote class="blockquote">
                <p>"Productos de excelente calidad. ¡Recomendado al 100%!"</p>
            </blockquote>
        </div>
    </section>

    {{-- Inspiración --}}
    <section class="container text-center py-5">
        <h3 class="fw-bold">Tu creatividad merece las mejores herramientas</h3>
        <p class="fs-5">Transforma cada página en una obra de arte con Pluma y Papel.</p>
    </section>

    {{-- Call to Action --}}
    <section class="bg-primary text-white text-center py-5">
        <div class="container">
            <h3 class="mb-3">¿Listo para comenzar?</h3>
            <a href="{{ url('contacto.index') }}" class="btn btn-outline-light btn-lg">Registrarse</a>
        </div>
    </section>
@endsection
