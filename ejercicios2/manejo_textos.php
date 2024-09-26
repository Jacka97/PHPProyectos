<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Manejo de textos</h1>
    <?php
     $radio = 3.5;
     define('PI', 3.1416);
     $area = PI * sqrt($radio);
     function toFixed($number, $decimals) {
         return number_format($number, $decimals, '.', "");
       }
       
     $area = toFixed($area, 2);
     $textoResultado = "El area del círculo calculada es: $area";
     $textoResultadoMayus = strtoupper($textoResultado);
     $textoResultadoModificado = str_replace("calculada", "obtenida", $textoResultado);
     $longitudSTR = strlen($textoResultado);
     $posicion = strpos($textoResultado, "círculo");
     $numeros1 = "1,2,3,4,5";
     $arrayNumeros = explode(",", $numeros1);
     $numeros2 = implode("+", $arrayNumeros);
     $resultado = 0;
     for($i = 0; $i < count($arrayNumeros); $i++){
        $resultado += $arrayNumeros[$i];
     }
     echo "$textoResultado </br>";
     echo "Ahora en mayusculas: $textoResultadoMayus </br>";
     echo "Ahora remplazando calculada por obtenida: $textoResultadoModificado </br>";
     echo "La longitud de la cadena es de: $longitudSTR caracteres </br>";
     echo "La posicion de la palabra círculo es: $posicion </br>";
     echo "La cadena '$numeros1' ahora es '$numeros2' </br>";
     echo "$numeros2 = $resultado";

     

    ?>
</body>
</html>