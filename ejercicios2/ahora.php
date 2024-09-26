<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Variable tipo Date</h1>
    <?php
    date_default_timezone_set("Europe/Madrid");
    $fecha = date("d M Y - H:i:s");
    echo "$fecha </br>";

    $fecha_actual = strtotime(date("d-m-Y"));
    $fecha_entrada = strtotime("22-01-1997");
    $diferencia = $fecha_actual - $fecha_entrada;

    $diffA = floor($diferencia / 31536000); // Segundos en 1 año
    $restoAño = $diferencia % 31536000;
    $diffM = floor($restoAño / 2628000); // Segundos en 1 mes (aproximadamente)
    $restoMes = $restoAño % 2628000;
    $diffD = floor($restoMes / 86400); // Segundos en 1 dia

    echo "$diffA años, $diffM meses, $diffD días";
    ?>
</body>
</html>
