<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts y estilos -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div id="app">
    <!-- Navbar existente -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <!-- Puedes agregar elementos al menú de ser necesario -->
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    <!-- Contenedor principal con Sidebar y Contenido -->
    <main class="py-4">
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar en la columna izquierda -->
                <div class="col-md-2">
                    <nav class="bg-custom-color-A7 p-4 text-light rounded-4">
                        <div class="text-center mb-4">
                            <img src="{{ asset('imgenes/pape3.jpeg') }}" alt="Fotografia" class="rounded-circle mx-auto d-block" style="width: 80px; height: 80px;">
                            <h4 class="mt-2">Inicio</h4>
                        </div>
                        <div class="list-group">
                            <a href="{{ route('persona.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-person-lines-fill me-2"></i> Personas
                            </a>
                            <a href="{{ route('provedor.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-file-person me-2"></i> Provedores
                            </a>
                            <a href="{{ route('cliente.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-person-check-fill me-2"></i> Clientes
                            </a>
                            <a href="{{ route('empleado.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-person-arms-up me-2"></i> Empleados
                            </a>
                            <a href="{{ route('metodospago.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-credit-card-2-front-fill me-2"></i> Métodos de Pago
                            </a>
                            <a href="{{ route('producto.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-projector me-2"></i> Productos
                            </a>
                            <a href="{{ route('venta.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-bag-fill me-2"></i> Ventas
                            </a>
                            <a href="{{ route('descuento.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-tags-fill me-2"></i> Descuentos
                            </a>
                            <a href="{{ route('descuentosventa.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-bag me-2"></i> Ventas con descuento
                            </a>

                            <a href="{{ url('home') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-file-earmark me-2"></i> Dashboard
                            </a>
                            <a href="{{ url('ABPLANDING') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                                <i class="bi bi-file-earmark me-2"></i> Landing page
                            </a>
                        </div>
                    </nav>
                </div>

                <!-- Contenido principal en la columna derecha -->
                <div class="col-md-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
