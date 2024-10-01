<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Comprobar hora</h1>
    <?php
    $fecha = "23:30:59";
    if (preg_match("/^([0-2]{1}[0-9]{1}):([0-6]{1}[0-9]{1}):([0-6]{1}[0-9]{1})$/", $fecha, $partes) == 1)
    {
        if($partes[1] <= 23 && $partes[2] <= 59 && $partes[3] <= 59){
            echo "La hora completa es " . $partes[0];
            echo "</br>Las horas son " . $partes[1];
            echo "</br>Los minutos son " . $partes[2];
            echo "</br>Los segundos son " . $partes[3];
        }else{
            echo "Formato de fecha no válido";
        }
    } else {
        echo "Formato de fecha no válido";
    }
    ?>
</body>
</html>