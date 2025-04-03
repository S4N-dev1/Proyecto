@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    body {
        font-family: 'Segoe UI', sans-serif;
    }

    .hero {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                    url('{{ asset("imgenes/pencil4.png") }}') center center / cover no-repeat;
        height: 85vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .nav-custom {
        background-color: #0d6efd;
    }

    .nav-custom .nav-link {
        color: white;
        margin-right: 10px;
    }

    .nav-custom .nav-link:hover {
        color: #ffc107;
    }

    .section-title {
        font-weight: bold;
        margin-bottom: 30px;
    }

    .card img {
        height: 200px;
        object-fit: cover;
    }

    .active_custom {
        font-weight: bold;
        color: #ffc107 !important;
    }
</style>

<!-- Navbar personalizada -->
<nav class="navbar nav-custom shadow px-3">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Dropdown "Pluma y Papel" -->
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

        <!-- Botones 1 a 12 -->
        <ul class="navbar-nav flex-row">
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta1') }}">Inicio</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta2') }}">Productos</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta3') }}">Clientes</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta4') }}">Empleados</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta5') }}">Ventas</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta6') }}">Pagos</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta7') }}">Proveedores</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta8') }}">Métodos de Pago</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta9') }}">Descuentos</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta10') }}">Reportes</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta11') }}">Contacto</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="{{ url('ruta12') }}">Cerrar sesión</a></li>
        </ul>
    </div>
</nav>

<!-- Hero principal -->
<section class="hero">
    <div class="container">
        <h1 class="display-4 fw-bold">Inspira tus ideas</h1>
        <p class="lead">Papelería, creatividad y calidad en un solo lugar.</p>
        <a href="#" class="btn btn-warning btn-lg mt-3">Descubre nuestros productos</a>
    </div>
</section>

<!-- Productos destacados -->
<section class="container py-5">
    <h2 class="text-center section-title">Más Vendidos</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset('imgenes/colors1.jpeg') }}" class="card-img-top" alt="Colores">
                <div class="card-body text-center">
                    <h5 class="card-title">Colores</h5>
                    <p class="card-text">Perfectos para dar vida a tus ideas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset('imgenes/tinta1.jpeg') }}" class="card-img-top" alt="Tinta">
                <div class="card-body text-center">
                    <h5 class="card-title">Tinta para impresora</h5>
                    <p class="card-text">Nitidez y calidad en cada impresión.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset('imgenes/Boli1.jpeg') }}" class="card-img-top" alt="Bolígrafos">
                <div class="card-body text-center">
                    <h5 class="card-title">Bolígrafos</h5>
                    <p class="card-text">Escribe con estilo y comodidad.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón global para ver todos -->
    <div class="text-center mt-4">
        <a href="{{ url('productos') }}" class="btn btn-primary btn-lg">
            Ver todos los productos
        </a>
    </div>
</section>

<!-- Opiniones -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h2 class="section-title">Nuestros clientes opinan</h2>
        <blockquote class="blockquote">
            <p>"Productos de excelente calidad. ¡Recomendado al 100%!"</p>
        </blockquote>
    </div>
</section>

<!-- Frase motivadora -->
<section class="container text-center py-5">
    <h3 class="fw-bold">Tu creatividad merece las mejores herramientas</h3>
    <p class="fs-5">Transforma cada página en una obra de arte con Pluma y Papel.</p>
</section>

<!-- Llamado a la acción -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h3 class="mb-3">¿Listo para comenzar?</h3>
        <a href="{{ url('productos') }}" class="btn btn-outline-light btn-lg">Explorar productos</a>
    </div>
</section>
@endsection

