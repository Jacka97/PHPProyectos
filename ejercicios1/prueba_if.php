<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4, 5, 5.1</title>
</head>
<body>
    <?php

    $nota1 = rand(0,10);
    $nota2 = rand(0,10);
    $nota3 = rand(0,10);

    if ($nota1 >= $nota2 && $nota1 >= $nota3) {
    echo "La nota mas alta es $nota1 </br>";
    }
    elseif ($nota2 >= $nota1 && $nota2 >= $nota3) {
    echo "La nota mas alta es $nota2 </br>";
    }else{
    echo "La nota mas alta es $nota3 </br>";
    }
    echo "La nota 1 es: ";
    switch($nota1){
      
        case 5:
        echo "Suficiente </br>";
        break;
        case 6:
        echo "Bien </br>";
        break;
        case 7:
        echo "Notable bajo </br>";
        break;
        case 8:
        echo "Notable Alto </br>";
        break;
        case 9:
        echo "Sobresaliente </br>";
        break;
        case 10:
        echo "Matricula de Honor </br>";
        default:
        echo "Suspendido </br>";
    }
    echo "La nota 2 es: ";
    switch($nota2){
     
        case 5:
        echo "Suficiente </br>";
        break;
        case 6:
        echo "Bien </br>";
        break;
        case 7:
        echo "Notable bajo </br>";
        break;
        case 8:
        echo "Notable Alto </br>";
        break;
        case 9:
        echo "Sobresaliente </br>";
        break;
        case 10:
        echo "Matricula de Honor </br>";
        default:
        echo "Suspendido </br>";
    }
    echo "La nota 3 es: ";
    switch($nota3){
        
        case 5:
        echo "Suficiente </br>";
        break;
        case 6:
        echo "Bien </br>";
        break;
        case 7:
        echo "Notable bajo </br>";
        break;
        case 8:
        echo "Notable Alto </br>";
        break;
        case 9:
        echo "Sobresaliente </br>";
        break;
        case 10:
        echo "Matricula de Honor </br>";
        default:
        echo "Suspendido </br>";
    }
    ?>
</body>
</html>