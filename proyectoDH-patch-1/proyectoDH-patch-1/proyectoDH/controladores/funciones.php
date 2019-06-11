<?php
session_start();
require_once("helpers.php");

function validar($datos,$pantalla){
    $errores=[];
      /*VALIDACION NOMBRE*/
      if(isset($datos["nombre"])){
        $nombre = trim($datos["nombre"]);
        if(empty($nombre)){
            $errores["nombre"]= "El nombre no puede estar vacio";
        }elseif (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
            $errores["nombre"]="El nombre solo debe contener letras o espacios en blanco";
        }
      }
      /*VALIDACION EMAIL*/
        $email = trim($datos["email"]);
        if(empty($email)){
            $errores["email"]= "El email no puede estar vacio";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores["email"]="El formato de e-mail no es válido";
      }
      /*VALIDACION USER*/
      if(isset($datos["user"])){
        $user = trim($datos["user"]);
        if(empty($user)){
            $errores["user"]= "El usuario no puede estar vacio";
        }elseif (!preg_match("/^[a-zA-Z]*$/",$user)) {
            $errores["user"]="El usuario no debe contener caracteres especiales";
        }elseif (strpos($user, " ")) {
          $errores["user"]="El usuario no debe contener espacios";
        }
      }
      /*VALIDACION PASS*/
      if(isset($datos["password"])){
        $password = trim($datos["password"]);
      if (strlen($password)<6) {
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
      }elseif (!preg_match('`[a-z]`',$password)){
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
      }elseif (!preg_match('`[A-Z]`',$password)){
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
      }elseif (!preg_match('`[0-9]`',$password)){
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
      }
    }
    /*VALIDACION REPASS*/
      if(isset($datos["repassword"],$datos["password"])){
          $password = trim($datos["password"]);
          $repassword = trim($datos["repassword"]);
        if ($password != $repassword) {
          $errores["repassword"]="Las contraseñas no coinciden";
        }
      }

    if($pantalla == "registro"){
      $nombre = $_FILES["avatar"]["name"];
      $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        if($_FILES["avatar"]["error"]!=0){
            $errores["avatar"]="Debe subir una imagen";
        }elseif($ext != "png"){
            $errores["avatar"]="La imagen tiene que tener formato PNG";
        }

    }
    return $errores;
}

function inputUser($campo){
    if(isset($_POST[$campo])){
        return $_POST[$campo];
    }
}

function armarAvatar($imagen,$datos){
    $nombre = $imagen["avatar"]["name"];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    $avatar = $datos["email"] . uniqid();
    $archivoOrigen = $imagen["avatar"]["tmp_name"];
    $archivoDestino = dirname(__DIR__) . "/users-img/" . $avatar . "." . $ext;
    move_uploaded_file($archivoOrigen,$archivoDestino);
    $avatar = $avatar.".".$ext;
    return $avatar;
}

function armarUser($datos,$imagen){
    $usuario = [
        "nombre"=>$datos["nombre"],
        "email"=>$datos["email"],
        "user"=>$datos["user"],
        "password"=> password_hash($datos["password"],PASSWORD_DEFAULT),
        "avatar"=>$imagen,
    ];
    return $usuario;
}

function guardarUser($usuario){
    $usuariojson = json_encode($usuario);
    file_put_contents('users.json',$usuariojson. PHP_EOL, FILE_APPEND);
}

//Función que nos permite buscar por email, a ver si el usuario existe o no en nuestra base de datos, que ahorita es un archivo json.
function buscarEmail($email){
    $usuarios = abrirBaseDatos();
    if($usuarios!==null){
        foreach ($usuarios as $usuario) {
            if($email === $usuario["email"]){
                return $usuario;
            }
        }
    }

    return null;
}

//Esta función abre nuestro archivo json y lo prepara para eliminar el último registro en blanco y además, fijese que además genero el array asociativo del mismo. Convierto de json a array asociativo para mas adelante con la funcion "bucarEmail" poder recorrerlo y verificar si el usuario existe o no en mi base de datos.
function abrirBaseDatos(){
    if(file_exists("usuarios.json")){
        $baseDatosJson= file_get_contents("usuarios.json");
        $baseDatosJson = explode(PHP_EOL,$baseDatosJson);
        //Aquí saco el ultimo registro, el cual está en blanco
        array_pop($baseDatosJson);
        //Aquí recooro el array y creo mi array con todos los usuarios
        foreach ($baseDatosJson as  $usuarios) {
            $arrayUsuarios[]= json_decode($usuarios,true);
        }
        //Aquí retorno el array de usuarios con todos sus datos
        return $arrayUsuarios;
    }else{
        return null;
    }
}

//Esta función la cree para lograr determinar la creación del archivo json, pero ahora con la nueva clave del usuario, ya que el usuairo se le habia olvidado la misma, lo puedo hacer en una sóla función, sin embargo lo realice por separado, para que ustedes lo comprendieran mejor, trabajando todo por parte
function armarRegistroOlvide($datos){
    $usuarios = abrirBaseDatos();

    foreach ($usuarios as $key=>$usuario) {

        if($datos["email"]==$usuario["email"]){
            //Esta línea se las comente para que a futuro puedan probar si la clave nueva la van a grabar coorectamente, la idea es verla antes de hashearla.
            //$usuario["password"]= $datos["password"];
            $usuario["password"]= password_hash($datos["password"],PASSWORD_DEFAULT);
            $usuarios[$key] = $usuario;
        }
        $usuarios[$key] = $usuario;
    }

    //Esto se los coloque para que sepan que con esta función podemos borrar un archivo
    unlink("usuarios.json");
    foreach ($usuarios as  $usuario) {
        $jsusuario = json_encode($usuario);
        file_put_contents('usuarios.json',$jsusuario. PHP_EOL,FILE_APPEND);
    }

//Esta función no retorna nada, ya que su  responsabilidad es guardar al usuario, pero con su nueva contraseña
}

//Aqui creo los las variables de session y de cookie de mi usuario que se está loguendo
function seteoUsuario($user,$dato){
    $_SESSION["nombre"]=$user["nombre"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["perfil"]= $user["perfil"];
    $_SESSION["avatar"]= $user["avatar"];
    if(isset($dato["recordar"]) ){
        setcookie("email",$dato["email"],time()+3600);
        setcookie("password",$dato["password"],time()+3600);
    }
}
//Con esta función controlo si el usuario se logueo o ya tenemos las cookie en la máquina
function validarUsuario(){
    if($_SESSION["email"]){
        return true;
    }elseif ($_COOKIE["email"]) {
        $_SESSION["email"]=$_COOKIE["email"];
        return true;
    }else{
        return false;
    }

}
