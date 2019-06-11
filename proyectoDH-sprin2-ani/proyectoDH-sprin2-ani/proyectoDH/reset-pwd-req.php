<?php
require_once("./controladores/funciones.php");
require_once("helpers.php");

if ($_POST){

  }

 ?>
<!DOCTYPE html>
  <html lang="es" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Wanderlust|Login</title>
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
  <section>
    <div class="container-fluid div-separacion">
      <div class="row">
        <div class="col-12">
          <div class="reset-pass">
            <h3>Olvidé mi contraseña</h3>
            <br>
            ¿No recuerdas tu contraseña? ¡No te preocupes! Te podemos ayudar. Llena este formulario y enviaremos un correo electrónico a la dirección registrada en tu cuenta para que puedas restablecer tu contraseña.
            <br>
          </div>
          <form method="POST" action=""  enctype= "multipart/form-data">
            <div class="form-group form-size div-form">
              <label for="userInput">Usuario</label>
              <input type="text" name="user" class="form-control" id="userInput" placeholder="Ingrese usuario" value="<?=(isset($errores["user"]) )? "" : inputUser("user");?>">
              <?php
              if(isset($errores["empty"])){?>
                <div class="alert alert-light" role="alert">
                  <?php echo $errores["empty"]; ?>
                </div>
              <?php } ?>
              <?php
              if(isset($errores["user"])){?>
                <div class="alert alert-light" role="alert">
                  <?php echo $errores["user"]; ?>
                </div>
              <?php } ?>
            </div>
            <div class="form-group row">
              <button type="submit" class="btn btn-primary buttonregister">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<footer>
  <p class="col-sm-12">® 2019, wanderlust.com.ar SA . Todos los derechos reservados. </p>
</footer>



</html>
