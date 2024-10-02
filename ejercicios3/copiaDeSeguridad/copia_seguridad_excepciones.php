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
        $fichero = "datos1.txt";
        $ficheroCopia = "copiaDatos.txt";
        try{
        if (!file_exists($fichero)){
        throw new Exception("El fichero de entrada no existe");
        }
            $contenido = file_get_contents($fichero);
            file_put_contents($ficheroCopia, $contenido);
            echo "Copia de seguridad creada con exito";
        } catch (Exception $e) {
            echo "Se ha producido un error: " . $e->getMessage();
        }
        
    ?>
</body>
</html>