<?php
 include_once "includes.inc.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
  <?php
  $persona = new Persona("44531098Q", "Daniel Zaragoza",  "daniel.zaragoza@gmail.com");
  $estudiante = new  Estudiante($persona->getDNI(),$persona->getNombre(), $persona->getEmail(), 45453453);
  echo "<h2>Persona</h2>";
  $persona->Mostrar();
  echo "<h2>Estudiante</h2>";
  $estudiante->Mostrar();
  ?>
  
</body>
</html>