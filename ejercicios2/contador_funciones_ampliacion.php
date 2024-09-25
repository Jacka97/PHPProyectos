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
    $c = 2; 
    function bucleContar($inicio, $fin, $salto){
        for($i = $inicio; $i <= $fin; $i += $salto){
            if($i + $salto > $fin){
                echo "$i";
            }else{
                echo "$i, ";
            }
        }
    }
    function cuenta($a, $b, $c){
        if($b > $a){
            bucleContar($a, $b, $c);
        } elseif ($a > $b){
            bucleContar($b, $a, $c);
        } else {
            echo "Son iguales!";
        }
    }
    cuenta($b, $a, $c);
    ?>
</body>
</html>
