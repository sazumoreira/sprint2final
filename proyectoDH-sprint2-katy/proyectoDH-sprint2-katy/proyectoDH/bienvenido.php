<?php
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Wanderlust|Bienvenido</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
          <a class="nav-link color-a" href="login.php">Login</a>
        </li>
        <li class="nav-item margin-li">
          <a class="nav-link color-a" href="registro.php">Registrarme</a>
        </li>
      </ul>
    </div>
  </nav>
  </header>
    <div class="container-fluid">
      <div id="carouselExampleControls" class="carousel slide carrusel" data-ride="carousel">
        <div class="carousel-inner alto-carousel">
          <div class="carousel-item active">
            <img src="img/bienvenido.jpg" class="d-block w-100" alt="bienvenido">
          </div>
      </div>
          <article class="justify-content-center">
          <h2 class="h2-bienvenidos">¡Gracias por registrarte en Wanderlust!<br></h2>
          <p class="p-bienvenidos">A partir de ahora podrás compartir tus experiencias de viajero e interactuar con otros usuarios que viven las mismas aventuras que vos por el mundo.</p>
        </article>
        <div class="form-group row col-sm-12">
          <button type="" class="btn btn-primary buttonregister" href="login.php">Logueate</button>
        </div>
    </div>
    <footer>
      <p class="col-sm-12">® 2019, wanderlust.com.ar SA . Todos los derechos reservados. </p>
    </footer>
  </body>
</html>
