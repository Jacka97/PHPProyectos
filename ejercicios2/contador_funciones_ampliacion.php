<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.1</title>
</head>
<body>
    <h1>Contador Funciones Ampliacion</h1>
    <?php
    $a = 10;
    $b = 20;
    $salto = 2; 
    function bucleContar($inicio, $fin, $salto){
        for($i = $inicio; $i <= $fin; $i += $salto){
            if($i == $fin){
                echo " $i";
            }else{
                echo "$i, ";
            }
        }
    }
    function cuenta($a, $b, $salto){
        if($b > $a){
            bucleContar($a, $b, $salto);
        }elseif ($a > $b){
            bucleContar($b, $a, $salto);
        }else{
            echo "Son iguales!";
        }
    }
    cuenta($b, $a, $salto);
    ?>
</body>
</html>
