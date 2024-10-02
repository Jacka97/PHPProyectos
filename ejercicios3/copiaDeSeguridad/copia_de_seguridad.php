<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Copia de Seguridad</h1>
    <?php
        $fichero = "datos.txt";
        $ficheroCopia = "copiaDatos.txt";
        if (file_exists($fichero)){
            $contenido = file_get_contents($fichero);
            file_put_contents($ficheroCopia, $contenido);
            echo "Copia de seguridad creada con exito";

        }else{
            echo "El fichero no existe";
        }
    ?>
</body>
</html>