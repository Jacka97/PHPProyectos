<?php
include_once "../models/user.php";
session_start();
$usersJSON = json_decode("../data/users.json", true);
if (isset($_POST['password'])){
    $pass = $_POST['password'];
    $_SESSION['contraseña'] = $pass;
}
if (isset($_POST['username'])){
    $user = $_POST['username'];
    $_SESSION['usuario'] = $user;
}
$notesJSON = json_decode("../data/notes.json", true);
$_SESSION['notas'] = $notesJSON;
//REGISTRO
if(isset($_POST['registro'])){
    if(comprobarUsers($user, $usersJSON) == true){
        registrar($user, $pass, $usersJSON);
    }
}
//LOGIN



   
   if(isset($_POST['recordarme']) == true){ // AÑADIR COOKIES

    setcookie('usuario', $user, time() + 3600, '/', 'localhost');
    setcookie('contraseña', $pass, time() + 3600, '/', 'localhost');
   }
   if(isset($_POST['recordarme']) == false){ // BORRAR COOKIES

    setcookie('usuario', $user, time() - 3600, '/', 'localhost');
    setcookie('contraseña', $pass, time() - 3600, '/', 'localhost');
   }


if($user = 'admin'){

    header('Location: ../views/dashboard.php');
}

?>

