<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <?php
    echo "<h2>Bucle FOR creciente</h2></br>";
    for ($i = 0; $i <= 100; $i++){
    if ($i == 100){
        echo "$i.";
    }else{
        echo "$i, ";
    }
    }
    echo "<h2>Bucle FOR decreciente</h2></br>";
    for ($i = 100; $i >= 0; $i--)
    {
    if ($i == 0){
        echo "$i.";
    }else{
        echo "$i - ";
    }
    }
    echo "</br>";
    echo "<h2>Bucle DO WHILE creciente</h2></br>";
    $numero = 0;
    do{
    if($numero == 100){
        echo "$numero.";
    }else{echo "$numero, ";}
    
    $numero++;
    } while ($numero <= 100);

    echo "<h2>Bucle DO WHILE decreciente</h2></br>";
    $numero = 100;
    do{
    if($numero == 0){
        echo "$numero.";
    }else{
        echo "$numero - ";}
    
    $numero--;
    } while ($numero >= 0);
    ?>
</body>
</html>