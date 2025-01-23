<?php
session_start();
$usu = $_SESSION["username"];
$pass = $_SESSION["password"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>USO DE SESSION</h1>
    <h2>Bienvenido <?php echo $usu; ?></h2>
</body>
</html>