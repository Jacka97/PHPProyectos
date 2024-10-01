<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Tabla de multiplicar ARRAY</h1>
    <?php

    for($i = 0; $i <= 9; $i++){
        for($j = 0; $j <= 9; $j++){
            $tablaMultiplicar[$i][$j] = $i * $j;
        }
    }
    for($k = 0; $k < count($tablaMultiplicar); $k++){
        echo "Tabla del $k: </br>";
        for($o = 0; $o < count($tablaMultiplicar[$k]); $o++){
            echo "$k X $o = " . $tablaMultiplicar[$k][$o] . "</br>";
        }
    }
    ?>
</body>
</html>