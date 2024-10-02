<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
</head>
<body>
    <h1>Coches</h1>
    <?php
    $coches = array(
        "4433DZA" => array("marca" => "Ford", "modelo" => "Mustang", "puertas" => 4), 
        "2234ZAD" => array("marca" => "Mercedes", "modelo" => "AMG", "puertas" => 2), 
        "5689ZDA" => array("marca" => "Subaru", "modelo" => "Impreza", "puertas" => 4)
    );

    
    ksort($coches); // Ordenar el array por matrícula (clave)
    foreach ($coches as $matricula => $datos) {
        echo "<h2>Matrícula: $matricula</h2>";
        echo "<p>Marca: " . $datos['marca'] . "</p>";
        echo "<p>Modelo: " . $datos['modelo'] . "</p>";
        echo "<p>Número de puertas: " . $datos['puertas'] . "</p>";
    }
    ?>
</body>
</html>
