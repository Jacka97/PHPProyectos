<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_COOKIE['nombre']) && isset($_COOKIE['email'])) {
    echo "Bienvenido de nuevo, " . $_COOKIE['nombre'] . ". Tu correo es " . $_COOKIE['email'];
} else {
    echo "No hay datos guardados en las cookies.";
}
?>
<form action="procesar_registro.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <input type="submit" value="Registrar">
</form>
</body>
</html>