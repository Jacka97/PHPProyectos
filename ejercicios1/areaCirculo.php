<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio radio</title>
</head>
<body>
    <?php
    $radio = 3.5;
    define('PI', 3.1416);
    $area = PI * sqrt($radio);
    function toFixed($number, $decimals) {
        return number_format($number, $decimals, '.', "");
      }
      
    $area = toFixed($area, 4);
      
    echo "El area del circulo es $area";
    ?>
</body>
</html>