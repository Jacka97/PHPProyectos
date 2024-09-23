<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
<h1>Página de prueba en PHP</h1>
<?php
// Variables para almacenar el nombre y el año actual
$nombre = "Daniel Zaragoza";
$anyo = 1997;
$edad = 27;
if ($edad < 10)
{
echo "No tienes edad para ver esta web";
}
elseif ($edad < 18)
{
echo "Aún eres menor de edad, pero puedes acceder a esta web";
}
else
{
echo "Todo correcto";
}
?>
<p>Soy <?php echo $nombre; ?> y nací en el año <?php echo $anyo; ?>.</p>

</body>
</html>