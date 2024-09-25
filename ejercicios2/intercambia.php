<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Intercambia variables</h1>
    <?php
    $num1 = 10;
    $num2 = 20;
    function intercambia(&$a, &$b){ // La & permite que el valor de la variable sea sustituible por otro, sin necesidad de returns
        $temp = $b;
        $b = $a;
        $a = $temp;
    }
    intercambia($num1, $num2);
    echo "La variable 1 ahora es: $num1 y la variable 2 ahora es: $num2";
    ?>
</body>
</html>