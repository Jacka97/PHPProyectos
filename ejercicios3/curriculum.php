<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
</head>
<body>
    <?php

        $saludo_es = "Hola, mi nombre es Daniel Zaragoza Altarriba y hablo los siguientes idiomas: </br>";
        $saludo_en = "Hello, my name is Daniel Zaragoza Altarriba and I can speak the next languajes: </br>";
        $idiomas_es = "Castellano(Nativo), Ingles(B2), Valenciano(Nativo), Aleman(A1)";
        $idiomas_en = "Spanish(Native), English(B2), Valencian(Native), German(A1)";
        $idioma = $_GET["idioma"];
        $saludo = "saludo_" . $idioma;
        $texto = "idiomas_" . $idioma;
        echo $$saludo;
        echo $$texto;
    ?>
</body>
</html>