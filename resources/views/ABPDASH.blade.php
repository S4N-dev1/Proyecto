@extends('Layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class=" bg-custom-color-A8 text-left text-custom-color-A1 shadow mx-0 p-0 mt-0">
        <h5 class="p-2"><a href="{{url('ABPLANDING')}}" class="btn text-decoration-none {{request()->routeIs('ABPLANDING')?'active_custom':''}} text-white"><i class="bi bi-file"></i> LANDING</a></h5>
    </div>
    <div class="container-fluid bg-custom-color-G2 w-100 ">

    <div class="container-fluid">

        <div class="row">
            <nav class="col-2 bg-custom-color-A7 p-4 text-light rounded-4 rounded-end-0 mx-auto">
                <div class="row border-primary">
                    <img src="{{asset("imgenes/pape3.jpeg")}}" class="rounded-5 mx-auto d-block w-4" alt="Fotografia">
                </div>
                <h4 class="text-center fa-solid text-light p-3 ">Inicio</h4>
                <h5><i class="bi bi-card-checklist text-light p-3"> Reportes</i></h5>
                <h5><i class="bi bi-person-circle text-light p-3"> Usuarios</i></h5>
                <h5><i class="bi bi-gear text-light p-3"> Ajustes</i></h5>
                <h5><i class="bi bi-bar-chart text-light p-3"> Estadisticas</i></h5>
                <h5><i class="bi bi-person-gear text-light p-3"> Soporte</i></h5>
                <h5><i class="bi bi-box-arrow-in-right text-light p-3"> Salir</i></h5>


            </nav>

            <!-- Todo el contenido -->
            <main class="col-md-10 p-4 ">
                <div class="row">
                    <div class="col-md-4 text-center px-1 shadow ">
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
                    <div class="col-2 ms-1 p-1 d-flex gap-2 mb-5 card pt-4 shadow text-center">
                        <button type="button" class="btn">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-bag-fill"></i> Pedidos y ventas</h5>
                        </button>
                    </div>
                    <div class="col-2 ms-1 p-3 d-flex gap-2 mb-5 card pt-4 shadow text-center">
                        <button type="button" class="btn">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-people-fill"></i> Usuarios nuevos</h5>
                        </button>
                    </div>
                    <div class="col-2 ms-1 p-3 d-flex gap-2 mb-5 card pt-4 shadow text-center">
                        <button type="button" class="btn">
                            <h5 class="text-custom-color-A2"><i class="bi bi-exclamation-triangle-fill"></i> Errores/Alertas</h5>
                        </button>
                    </div>
                    <div class="col-2 ms-1 p-3 d-flex gap-2 mb-5 card pt-4 shadow text-center">
                        <button type="button" class="btn">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-file-earmark-check-fill"></i> Transacciones recientes</h5>
                        </button>
                    </div>
                    <div class="col-2 ms-1 p-3 d-flex gap-2 mb-5 card pt-4 shadow text-center">
                        <button type="button" class="btn">
                            <h5 class="text-custom-color-A2 fw-bold"><i class="bi bi-clock-fill"></i> Publicaciones recientes</h5>
                        </button>
                    </div>
                    <div class="row p-2">
                        <h3 class="text-custom-color-A8">Estadisticas</h3>
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
                labels: [ 'Colores','Tinta para Impresoras','Bolígrafos ' ],
                datasets: [{
                    label: 'Productos mas vendidos',
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


