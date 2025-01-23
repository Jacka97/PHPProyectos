<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Imagen</title>
</head>
<body>
<?php
$dimesionX = $_POST["dimensionX"];
$dimesionY =$_POST["dimensionY"];
if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir') {
    if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        // subido con éxito
        $nombre = "imagen_subida.jpg";                          
        move_uploaded_file($_FILES['archivo']['tmp_name'], "./uploads/{$nombre}");

        echo "<p>Archivo $nombre subido con éxito</p>";
        echo "<img src='./uploads/$nombre' alt='Imagen subida' width='$dimesionX' heigh='$dimesionY'>";
    }
}

    

?>




</body>
</html>