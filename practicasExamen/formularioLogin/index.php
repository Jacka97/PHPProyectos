<?php
session_start();
if (isset($_SESSION['usuario'])) {
    $username = $_SESSION['usuario'];
    } else {
        header('location: login.php');
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bienvenido  <?php echo $username; ?></h2>
</body>
</html>