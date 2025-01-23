<?php
session_start();

$usuario = $_POST["nombre"];
$contraseña = $_POST["contraseña"];


if($usuario === "Jacka" && $contraseña === "1234"){
    $_SESSION["usuario"] = $usuario;
    header("location: index.php");
    }else{
        echo "Error de autenticación";
        header("location: login.php");
    }


?>