<?php
   session_start();
   $user = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas - Mis notas</title>

    <style>
        form {
            position: relative;
        }
        button {
            width: 120px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            background-color: #556871;
            color: white;
            border: 0;
            cursor: pointer;
            position: absolute;
            bottom: 0;
        }
        textarea {
            margin-right: 10px;
            width: 400px;
            height: 150px;
        }
    </style>
</head> 
<body>
    <?php
    $notas = $_SESSION["notas"] // adquirimos el array de las notas de la variable de sesion
    ?>
    <h1>Mis notas</h1> 
    <p>Bienvenid@, <?php echo $user ?></p> 
    <a href="./login.php" <?php session_destroy(); ?>>Cerrar Sesión</a> 
    <h2>Añadir Nota</h2> 
    <form action="../controllers/notes.php" method="post"> 
        <textarea name="note" required></textarea> 
        <button type="submit" name="notaEnv">Agregar Nota</button> 
    </form> 
    <h2>Listado de notas</h2> 
    <ul> 
        <li>NOTA - FECHA_CREACIÓN</li> 
        <?php //For que supuestamente recorre el array de notas, y las va printeando
          // for($i= 0; $i < count($notas); $i++){
          //  var_dump($notas[$i]);
          // }


        ?>
    </ul> 
</body> 
</html> 
 