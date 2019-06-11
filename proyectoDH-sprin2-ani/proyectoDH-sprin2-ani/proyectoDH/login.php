<?php
require_once("./controladores/funciones.php");
require_once("helpers.php");

if ($_POST){
  $errores = validarLogin($_POST);
  if(count($errores)==0){
    $user=buscarEmail($_POST["email"]);
      if(validarUsuario()){
        //Cuando esté hecho el perfil.php redireccionar ahí//
          RedirectToURL("index.php");
        }else{
          seteoUsuario($user, $_POST);
          RedirectToURL("index.php");
        }
      }

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
      <div class="container-fluid div-separacion">

      <form method="POST" action=""  enctype= "multipart/form-data">
        <h3>Inciar Sesión</h3>
        <div class="form-group form-size div-form">

          <label for="userInput">Email</label>
          <input type="text" name="email" class="form-control" id="userInput" placeholder="Ingrese Email" value="<?=(isset($errores["user"]) )? "" : inputUser("user");?>">
          <?php
          if(isset($errores["user"])){?>
          <div class="alert alert-light" role="alert">
            <?php echo $errores["user"]; ?>
          </div>
        <?php } ?>

        </div>
        <div class="form-group form-size">
          <label for="passInput">Contraseña</label>
          <input name="password" type="password" type="text" class="form-control" id="passInput" placeholder="Ingrese contraseña" value="<?=(isset($errores["password"]) )? "" : inputUser("password");?>">
          <?php
          if(isset($errores["password"])){?>
          <div class="alert alert-light" role="alert">
            <?php echo $errores["password"]; ?>
          </div>
        <?php }?>
        </div>
        <span class"rest_pass"><a href="reset-pwd-req.php">Olvidé mi contraseña</a></span>

        <div class="form-group row">
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Recordarme
              </label>


            </div>
          </div>
        </div>
        <div class="form-group row">



          <button type="submit" class="btn btn-primary buttonregister">Ingresar</button>
        </div>
      </form>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<footer>
  <p class="col-sm-12">® 2019, wanderlust.com.ar SA . Todos los derechos reservados. </p>
</footer>



</html>
