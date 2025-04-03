@extends('Layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="container-fluid bg-custom-color-G2">
        <div class="row">
            <!-- Sidebar rediseñado -->
            <nav class="col-2 bg-custom-color-A7 p-4 text-light rounded-4">
                <div class="text-center mb-4">
                    <img src="{{ asset('imgenes/pape3.jpeg') }}" alt="Fotografia" class="rounded-circle mx-auto d-block" style="width: 80px; height: 80px;">
                    <h4 class="mt-2">Inicio</h4>
                </div>
                <div class="list-group">
                    <a href="{{ route('persona.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                        <i class="bi bi-person-lines-fill me-2"></i> Personas
                    </a>
                    <a href="{{ route('metodospago.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                        <i class="bi bi-credit-card-2-front-fill me-2"></i> Métodos de Pago
                    </a>
                    <a href="{{ route('descuento.index') }}" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                        <i class="bi bi-tags-fill me-2"></i> Descuentos
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                        <i class="bi bi-bar-chart me-2"></i> Estadísticas
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-custom-color-A7 text-light border-0 py-3">
                        <i class="bi bi-person-gear me-2"></i> Soporte
                    </a>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-10 p-4">
                <!-- Aquí iría el resto del contenido -->
                <div class="row">
                    <div class="col-md-4 text-center px-1 shadow">
                        <div class="card">
                            <h6 class="text-custom-color-A7">Clientes totales</h6>
                            <h2>1.4k</h2>
                        </div>
                    </div>
                    <div class="col-md-4 text-center px-0 shadow">
                        <div class="card">
                            <h6 class="text-custom-color-A7">Conversión</h6>
                            <h2>27%</h2>
                        </div>
                    </div>
                    <div class="col-md-4 text-center px-1 shadow">
                        <div class="card">
                            <h6 class="text-custom-color-A7">Ventas totales</h6>
                            <h2>3832</h2>
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <h3 class="text-custom-color-A8">Lista de Actividades</h3>
                    <!-- Botones de actividades -->
                    <div class="col-2 ms-1 p-3 d-flex align-items-center justify-content-center card pt-4 shadow text-center">
                        <button type="button" class="btn w-100">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-bag-fill"></i> Pedidos y ventas</h5>
                        </button>
                    </div>
                    <div class="col-2 ms-1 p-3 d-flex align-items-center justify-content-center card pt-4 shadow text-center">
                        <button type="button" class="btn w-100">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-people-fill"></i> Usuarios nuevos</h5>
                        </button>
                    </div>
                    <div class="col-2 ms-1 p-3 d-flex align-items-center justify-content-center card pt-4 shadow text-center">
                        <button type="button" class="btn w-100">
                            <h5 class="text-custom-color-A2"><i class="bi bi-exclamation-triangle-fill"></i> Errores/Alertas</h5>
                        </button>
                    </div>
                    <div class="col-2 ms-1 p-3 d-flex align-items-center justify-content-center card pt-4 shadow text-center">
                        <button type="button" class="btn w-100">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-file-earmark-check-fill"></i> Transacciones recientes</h5>
                        </button>
                    </div>
                    <div class="col-2 ms-1 p-3 d-flex align-items-center justify-content-center card pt-4 shadow text-center">
                        <button type="button" class="btn w-100">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-clock-fill"></i> Publicaciones recientes</h5>
                        </button>
                    </div>
                </div>
                <div class="row p-2">
                    <h3 class="text-custom-color-A8">Estadísticas</h3>
                </div>
                <div class="row mt-3 shadow bg-white">
                    <div class="col-md-7 chart-container">
                        <canvas id="doughnutChart"></canvas>
                    </div>
                    <div class="col-md-5 chart-container">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        const DONITA = document.getElementById('doughnutChart').getContext('2d');
        new Chart(DONITA, {
            type: 'doughnut',
            data: {
                labels: ['Ventas realizadas', 'Ventas pendientes'],
                datasets: [{
                    data: [30, 70],
                    backgroundColor: ['#6b95ff', '#12268e']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        const COLUMS = document.getElementById('barChart').getContext('2d');
        new Chart(COLUMS, {
            type: 'bar',
            data: {
                labels: ['Colores', 'Tinta para Impresoras', 'Bolígrafos'],
                datasets: [{
                    label: 'Productos más vendidos',
                    data: [350, 270, 190],
                    backgroundColor: ['#69aed5', '#315e68', '#152d49']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
@endsection
