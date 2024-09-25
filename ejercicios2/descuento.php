<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    $valor = 100;
    $desc = 30;
    function calculaDescuento ($precio, $descuento = 0){
        $dis = ($precio/100)* $descuento;
        return $precio - $dis;
    }
    echo "El valor del producto es:  " .calculaDescuento($valor, $desc);
    ?>
</body>
</html>