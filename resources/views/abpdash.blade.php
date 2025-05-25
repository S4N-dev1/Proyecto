@extends('layouts.side')
@section('content')

    <div class="container-fluid bg-custom-color-G2">
        <div class="row">


            <main class="col-md-10 p-4">
                <div class="row">
                    <div class="col-md-4 text-center px-1 shadow">
                        <div class="card">
                            <h6 class="text-custom-color-A7">Clientes totales</h6>
                            <h2>{{ $totalClientes }}</h2>
                        </div>
                    </div>
                    <div class="col-md-4 text-center px-0 shadow">
                        <div class="card">
                            <h6 class="text-custom-color-A7">Empleados registrados</h6>
                            <h2>{{ $totalempleados }}</h2>
                        </div>
                    </div>
                    <div class="col-md-4 text-center px-1 shadow">
                        <div class="card">
                            <h6 class="text-custom-color-A7">Ventas totales</h6>
                            <h2>{{ $ventasRealizadas }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <h3 class="text-custom-color-A8">Lista de Actividades</h3>
                    <div
                        class="col-2 ms-1 p-3 d-flex align-items-center justify-content-center card pt-4 shadow text-center">
                        <button type="button" class="btn w-100">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-bag-fill"></i> Pedidos y ventas
                            </h5>
                        </button>
                    </div>
                    <div
                        class="col-2 ms-1 p-3 d-flex align-items-center justify-content-center card pt-4 shadow text-center">
                        <button type="button" class="btn w-100">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-people-fill"></i> Usuarios nuevos
                            </h5>
                        </button>
                    </div>
                    <div
                        class="col-2 ms-1 p-3 d-flex align-items-center justify-content-center card pt-4 shadow text-center">
                        <button type="button" class="btn w-100">
                            <h5 class="text-custom-color-A2"><i class="bi bi-exclamation-triangle-fill"></i>
                                Errores/Alertas</h5>
                        </button>
                    </div>
                    <div
                        class="col-2 ms-1 p-3 d-flex align-items-center justify-content-center card pt-4 shadow text-center">
                        <button type="button" class="btn w-100">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-file-earmark-check-fill"></i>
                                Transacciones recientes</h5>
                        </button>
                    </div>
                    <div
                        class="col-2 ms-1 p-3 d-flex align-items-center justify-content-center card pt-4 shadow text-center">
                        <button type="button" class="btn w-100">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-clock-fill"></i> Publicaciones
                                recientes</h5>
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
                    data: [@json($ventasRealizadas), @json($ventasPendientes)],
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
                labels: @json($labels),
                datasets: [{
                    label: 'Productos con más existencias',
                    data: @json($data),
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
