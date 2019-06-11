<?php
 ?>
<!DOCTYPE html>
  <html lang="es" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Wanderlust|Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div class="container-fluid">
  <header class="color-a">
   <nav class="navbar navbar-expand-lg navbar-light bg-light background-nav">
    <img class="logo-img"src="img/logo.png" alt="logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item margin-li">
        <a class="nav-link color-a" href="index.php">Home</a>
      </li>
      <li class="nav-item margin-li">
        <a class="nav-link color-a" href="dudas.php">Preguntas frecuentes</a>
      </li>
      <li class="nav-item margin-li">
        <a class="nav-link color-a" href="registro.php">Registrarme</a>
      </li>
      <li class="nav-item margin-li">
        <a class="nav-link color-a" href="login.php">Login</a>
      </li>      
    </ul>
  </div>
</nav>
</header>
    <div id="carouselExampleControls" class="carousel slide carrusel" data-ride="carousel">
      <div class="carousel-inner alto-carousel">
        <div class="carousel-item active">
          <img src="img/carrusel1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/carrusel2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/carrusel3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  <section class="display-section section-style">
    <div class="col-sm-12 col-lg-4 card borde-card" style="width: 18rem;">
      <img src="img/experiencias.png" class="card-img-top size-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">experiencias</h5>
        <p class="card-text">Nutrite de las historias de cientos de viajeros y recabá información util para tu viaje.</p>
      </div>
    </div>
    <div class="col-sm-12 col-lg-4 card borde-card" style="width: 18rem;">
      <img src="img/destinos.png" class="card-img-top size-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">destinos</h5>
        <p class="card-text">¿Dónde ir?, ¿Qué ver?, ¿Qué comer?<br>
        Resolvé tus dudas y votá por las mejores respuestas.</p>
      </div>
    </div>
    <div class="col-sm-12 col-lg-4 card borde-card" style="width: 18rem;">
      <img src="img/dudas.png" class="card-img-top size-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">preguntas</h5>
        <p class="card-text">Explorá según tu destino y comenzá a vivenciar tu aventura antes de despegar.</p>
      </div>
    </div>
  </section>
  <footer>
    <p class="col-sm-12">® 2019, wanderlust.com.ar SA . Todos los derechos reservados. </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</div>
</body>
</html>
