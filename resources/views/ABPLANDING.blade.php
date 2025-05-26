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
    <div class="container mt-4">
    <h2 class="text-center mb-4">Listado de Productos</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($productos as $producto)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    @if($producto->foto)
                        <img src="{{ $producto->foto_url }}" class="card-img-top" alt="Foto de {{ $producto->nombre }}" style="height: 200px; object-fit: cover;">
                    @else
                        <img src="{{ asset('imgenes/default.png') }}" class="card-img-top" alt="Sin imagen" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <p class="card-text">
                            <strong>Código de Barras:</strong> {{ $producto->codigobarras }}<br>
                            <strong>Descripción:</strong> {{ $producto->descripcion ?? 'Sin descripción' }}<br>
                            <strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



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

    {{-- Footer --}}
    <section class="bg-dark text-white text-center py-4">
        <div class="container">
            <h4 class="mb-3">Síguenos en nuestras redes sociales</h4>
            <div class="d-flex justify-content-center gap-4">
                <a href="https://facebook.com" target="_blank" class="text-white fs-4"><i class="bi bi-facebook">plumaypapel</i></a>
                <a href="https://instagram.com" target="_blank" class="text-white fs-4"><i class="bi bi-instagram">pluma_y_papel2000</i></a>
                <a href="https://twitter.com" target="_blank" class="text-white fs-4"><i class="bi bi-twitter-x">@PapeleriaPyP</i></a>
                <a href="https://tiktok.com" target="_blank" class="text-white fs-4"><i class="bi bi-tiktok"></i>plumaypapel</a>
                <a href="https://youtube.com" target="_blank" class="text-white fs-4"><i class="bi bi-youtube">Pape PyP</i></a>
            </div>
        </div>
    </section>
@endsection
