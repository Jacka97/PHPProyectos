<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Contador Funciones</h1>
    <?php
    $a = 10;
    $b = 20;
    function bucleContar($inicio, $fin){
        for($i = $inicio; $i <= $fin; $i++){
            if($i == $fin){
                echo " $i";
            }else{
                echo "$i, ";
            }

        }
    }
    function cuenta($a, $b){
    if($b > $a){
        bucleContar($a, $b);
    }elseif ($a > $b){
        bucleContar($b, $a);
    }else{
        echo "Son iguales!";
    }
    }
    cuenta($b, $a);
    ?>
</body>
</html>