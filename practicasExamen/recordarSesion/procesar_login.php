<?php
if(isset($_POST["username"]) & isset($_POST["password"])) {
if(isset($_POST["recordarme"]) && $_POST["recordarme"] == "on"){
    $usu = $_POST["username"];
    $pass = $_POST["password"];
    setcookie("usuario", $usu, time() + 120);
    setcookie("contraseña", $pass, time() + 120);
    header("location: indexCoockies.php");
    }else{
        session_start();
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        header("location: indexSession.php");
    }

}else{
    echo "No se han enviado los datos";
}


?>