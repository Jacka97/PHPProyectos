<?php
if(isset($_POST["nombre"]) && isset($_POST["email"])){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    setcookie("nombre", $nombre, time() + (3600 * 24)*7);
    setcookie("email", $email, time() + (3600 * 24)*7);

    echo "Cookies creadas con éxito<br>";
    echo "Tu usuario es: " . $nombre ."<br>";
    echo "Tu email es: " . $email;
}



?>
