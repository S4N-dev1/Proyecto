<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center py-5">
<div class="container">
    <h1 class="text-primary">¡Bootstrap está funcionando en Laravel! 🎉</h1>
    <p class="lead">Si ves este texto en azul y con buen diseño, Bootstrap está instalado correctamente.</p>
    <button class="btn btn-success">Botón de prueba</button>
</div>
<!-- Si usas la CDN para JavaScript (opcional si no usaste npm) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Mi Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen">
                <div class="card-body">
                    <h5 class="card-title">Título de la Tarjeta</h5>
                    <p class="card-text">Esta es una tarjeta de Bootstrap.</p>
                    <a href="#" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <button class="btn btn-primary">Primario</button>
    <button class="btn btn-secondary">Secundario</button>
    <button class="btn btn-success">Éxito</button>
    <button class="btn btn-danger">Peligro</button>
</div>
<div class="container mt-4">
    <div class="alert alert-success">¡Operación exitosa!</div>
    <div class="alert alert-danger">¡Error al procesar!</div>
    <div class="alert alert-warning">¡Cuidado con esto!</div>
</div>

</body>
</html>
